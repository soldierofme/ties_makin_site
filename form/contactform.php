
<?php

/*--------------------------------------------------------------


	confirm.php - 本体[755]
	form.html - 入力フォーム[644]
	confirm.php - 確認画面用[705]
	form_completion.html - 送信完了画面[644]
	template.php - メール送信用テンプレート[705]
	reply.php - 自動返信用テンプレート[705]

	フォームのnameに「;s」オプションをつけると
	必須項目扱いになります。
	例) name="comment;s"
	nameにemailを指定するとメールアドレスとして扱われます。
	nameにemailcheckを指定するとメールアドレスの再入力の確認を
	することができます。
	※emailを使わない場合、emailcheckも利用しないようにして下さい。

	入力画面もしくは確認画面で
	「autoReply」に対して「1」を渡すと入力されたメールアドレスに
	自動返信をします。
	例）<input name="autoReply" type="hidden" value="1" />
	or　<input name="autoReply" type="checkbox" value="1" />
	※emailの項目がない場合は無効になります。

	確認画面用(confirm.php)には非表示フィールドで
	「mode」に対して「SEND」を必ず渡して下さい。
	例）<input name="mode" type="hidden" value="SEND" />
================================================================
	画面の流れ
	form.html(入力) ≫ contactform.php(入力チェック) ≫
	confirm.php(確認) ≫ contactform.php(送信[template.php/reply.php]) ≫
	form_completion.html(完了)
--------------------------------------------------------------*/


// 設定
$mail_to = 'soldierofme@gmail.com'; // lightwalker@lightwalker.jpフォームデータを受け取るメールアドレス
$mail_subject = 'マーキンへのお問合せ／お見積り'; // 受け取る時のSubject（件名）
$reply_subject = 'マーキンへのお問合せ／お見積りありがとうございます'; // 送信者へ自動返信のSubject（件名）
$internal_enc = 'UTF-8'; // 文字エンコード


// メイン
session_start();
if (!extension_loaded('mbstring')) Err('マルチバイト文字列関数は利用できません');
if (!$mail_to) Err('受取先メールアドレスが設定されてません');
if (!$_POST) Err('送信データがありません');
mb_language('ja');
mb_internal_encoding($internal_enc);
$x_mailer = 'Sapphirus.Formmail Ver. 1.40 (PHP/' . phpversion() . ')';
$mode = $_POST['mode'];

switch ($mode) {
case 'SEND': // メール送信
	if (!$_SESSION) Err('セッションデータがありません');

	// メールヘッダ
	if (!$_SESSION['email']) $mail_from = 'Formmail';
	else $mail_from = $_SESSION['email'];
	$mail_header  = "From: soldierofme@gmail.com\n";
	if ($mail_bcc) $mail_header .= "Bcc: {$mail_bcc}\n";

	// メール送信
	include ('template.php');
	$mail_message = html_entity_decode($mail_message, ENT_QUOTES, $internal_enc);
	$mail_message = str_replace("<br />", "", $mail_message);
	$mail_message = str_replace("\t", "\n", $mail_message);
	$mail_message = mb_convert_encoding($mail_message, $internal_enc, 'AUTO');
	mb_send_mail($mail_to, $mail_subject, $mail_message, $mail_header);

	// メール自動返信
	if ($_SESSION['autoReply'] && $_SESSION['email'] && is_file('reply.php')) {
		$reply_header  = "From: {$mail_to}\n";
		if ($mail_bcc) $reply_header .= "Bcc: {$mail_bcc}\n";
		$reply_header .= "X-Mailer: {$x_mailer}";
		include ('reply.php');
		$reply_message = html_entity_decode($reply_message, ENT_QUOTES, $internal_enc);
		$reply_message = str_replace("<br />", "", $reply_message);
		$reply_message = str_replace("\t", "\n", $reply_message);
		$reply_message = mb_convert_encoding($reply_message, $internal_enc, 'AUTO');
		mb_send_mail($mail_from, $reply_subject, $reply_message, $reply_header);
	}
	$_SESSION = array();
	session_unset();
	session_destroy();
	header('Location: form_completion.html');
	break;

default: // 入力データ処理
	session_unset();
	foreach ($_POST as $key => $value) {
		list($name, $option) = explode(";", $key);
		if ($option == 's' && !$value) {
			$_SESSION[$name] = '<span class="red">必須項目です</span>';
			$error = 1;
		} elseif ($name == 'email' && $value) {
			if (!preg_match("/^[\w\-\.]+\@[\w\-\.]+\.([a-z]+)$/", $value)) {
				$_SESSION['email'] = '<span class="red">メールアドレスが正しく入力されていません</span>';
				$error = $email = 1;
			} else {
				$_SESSION['email'] = $email = $value;
			}
		} elseif ($name == 'emailcheck') {
			if ($email != 1 && $email != $value) {
				$_SESSION['email'] = '<span class="red">メールアドレスが一致しません</span>';
				$error = 1;
			}
		} else {
			if (is_array($value)) {
				$value = implode("\t", $value);
			}
		if (get_magic_quotes_gpc()) $value = stripslashes($value);
		$value = mb_convert_encoding($value, $internal_enc, 'AUTO');
		$value = mb_convert_kana($value, 'KV');
		$value = htmlspecialchars($value, ENT_QUOTES);
		$_SESSION[$name] = nl2br($value);
		}
	}
	$_SESSION['inputErr'] = $error;
	header('Location: confirm.php');
}
exit;


function Err($err) { // エラー表示用
	$internal_enc = $GLOBALS['internal_enc'];
	echo <<<EOM

<!DOCTYPE HTML>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />



<meta name="copyright" content="Copyright (C) Light Walker All Rights Reserved." />
<meta name="Author" content="Light Walker" />


<title>大変恐れ入りますがエラーです：$err</title>



<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen,print" />
<link rel="stylesheet" href="../css/deco.css" type="text/css" media="screen,print" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="screen,print" />




<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../js/lightwalker.js"></script>
<script src="../js/jquery.cookie.js"></script>
<script src="../js/jquery.ah-placeholder.js"></script>



<!--[if lt IE 9]>
<script type="text/javascript" src="../js/selectivizr-min.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100706953-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>







<!-- header -->
<header>

<div class="clearfix" id="header">
<h1 class="clearfix">Light Walker(ライトウォーカー)｜超軽量の移動式LED看板＊屋外広告,LED看板,電光掲示板,LEDディスプレー,ledサイン</h1>


<div id="header_left"> <a href="http://www.lightwalker.jp/"><img src="../images/logo2.png" width="141" height="54" alt="屋外広告,広告看板,広告媒体,led販売,LED,販売LED,電飾看板,LED看板,ledサイン,LEDディスプレー,led,表示機,LED表示機,電光表示機,電光看板,電光掲示板"></a> </div>


<ul id="header_right">
<li><a href="../micro/index.html"><i class="fa fa-asterisk" aria-hidden="true"></i>&nbsp;ライトウォーカー&#047;マイクロ</a></li>
<li><a href="../shoppingguide.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;ショッピングガイド</a></li>
<li><a href="form.html"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;お見積りフォーム</a></li>
<li><a href="tel:0358174852"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;03-5817-4852</a></li>
</ul>

</div>
</header>


<!-- //header -->




<!-- page_t -->
<div id="page_t" class="clearfix">
<h2>フォーム送信エラー</h2>
</div>
<!-- //page_t -->




<!-- box_sandwich_stripegreen -->
<section class="box_sandwich_stripegreen">


<div class="box_inner">






<!-- normalcontents -->
<section class="normalcontents">


<h3 class="normaltxt"><strong>たいへん恐れ入りますがエラーになりました。 : </strong>$err<br>
戻って内容をご確認ください。</h3>
<p class="normaltxt mt40 mb40"><input type="button" value="戻って修正"  class="button1" onclick="history.back();"/></p>

</section>
<!-- //normalcontents -->




</div>


</section>
<!-- box_sandwich_stripegreen -->




<footer>


<div id="footer" class="clearfix">

<div class="footerlogo"><a href="http://www.lightwalker.jp/"><img src="../images/logo2.png" width="141" height="54" alt="屋外広告,広告看板,広告媒体,led販売,LED,販売LED,電飾看板,LED看板,ledサイン,LEDディスプレー,led,表示機,LED表示機,電光表示機,電光看板,電光掲示板"></a></div>

<ul>
<li><a href="../company.html">会社概要</a></li>
<li><a href="../privacypolicy.html">プライバシーポリシー</a></li>
<li><a href="../shoppingguide.html">ショッピングガイド</a></li>
<li><a href="form.html">お問合せ</a></li>
</ul>

<p id="footcopy">Copyright &copy; <a href="http://www.lightwalker.jp/">Light Walker</a>. All rights reserved.</p>
</div>



</footer>
<!-- //footer -->

<!-- ページトップへ -->
<div id="page-top"><a href="#header"><i class="fa fa-chevron-up fa-3x"></i></a></div>
<!-- //ページトップへ-->






</body>
</html>



EOM;
	exit;
}

?>
