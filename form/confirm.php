<?php
//セッションを利用するのでここは削除しないで下さい
session_start();
if (SID) Err('Cookieを有効にして下さい');
if (!$_SESSION) header('Location: form_completion.html');

function Err($err) {
	echo <<< EOM
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


<h3 class="normaltxt"><strong>たいへん恐れ入りますがエラーになりました。 : </strong>$err<br>
戻って内容をご確認ください。</h3>

<p class="normaltxt mt40 mb40"><input type="button" value="戻って修正" onclick="history.back();" class="button1"></p>

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
//ここまで
?>
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


<title>入力確認画面</title>



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
<h1 class="clearfix">マーキン</h1>
</div>
</header>


<!-- //header -->


<!-- page_t -->
<div id="page_t" class="clearfix">
<h2>入力確認画面</h2>
</div>
<!-- //page_t -->









<!-- box_sandwich_stripegreen -->
<section class="box_sandwich_stripegreen">


<div class="box_inner">


<p class="normaltxt">内容をご確認ください。</p>

<!--フォーム確認画面-->

<form id="form" name="form" method="post" action="contactform.php">
<dl class="formlist clearfix">

  <dt class="pt10">ご用件のご選択<span class="pink">&nbsp;※</span></dt>
  <dd><?=$_SESSION['how1']?><br>
<?=$_SESSION['how2']?><br>
<?=$_SESSION['how3']?>
</dd>
<hr class="hr2">
  <dt class="pt10">ご希望の商品<span class="pink">&nbsp;※</span></dt>
  <dd>
<?=$_SESSION['micro']?>
<?=$_SESSION['body_LW-A3']?>
<?=$_SESSION['body_LW-B3']?>
<?=$_SESSION['body_LW-B2']?>
<?=$_SESSION['body_LW-B1']?>
</dd>
<hr class="hr2">
<dt class="pt10">ご希望の商品<br>[サインバッグ]</dt>
<dd>
<?=$_SESSION['signbag_LB-B3']?>
<?=$_SESSION['signbag_LB-B2']?>
<?=$_SESSION['signbag_LB-B1']?>
<?=$_SESSION['signbag_LBα-A3']?>
<?=$_SESSION['signbag_LBα-B3']?>
</dd>
<hr class="hr2">
  <dt class="pt10">ご希望の商品<br>[専用フレーム]</dt>
<dd>
<?=$_SESSION['flame_A_LF-B3']?>
<?=$_SESSION['flame_B_LF-B2']?>
<?=$_SESSION['flame_C_LF-B3']?>
<?=$_SESSION['flame_A_LF-B2']?>
<?=$_SESSION['flame_B_LF-B2']?>
<?=$_SESSION['flame_C_LF-B2']?>
<?=$_SESSION['flame_A_LF-B1']?>
<?=$_SESSION['flame_B_LF-B1']?>
<?=$_SESSION['flame_C_LF-B1']?>
</dd>
<hr class="hr2">



  <dt>会社名・店舗名</dt><dd><?=$_SESSION['company']?></dd>
<hr class="hr2">
  <dt>ご担当様お名前<span class="pink">&nbsp;※</span></dt><dd><?=$_SESSION['name']?></dd>
  <hr class="hr2">
  <dt>ご担当様お名前フリガナ<span class="pink">&nbsp;※</span></dt><dd><?=$_SESSION['name2']?></dd>
  <hr class="hr2">
  <dt>郵便番号(ハイフン無)<span class="pink">&nbsp;※</span></dt><dd><?=$_SESSION['postalcode']?></dd>
  <hr class="hr2">
  <dt>ご住所<span class="pink">&nbsp;※</span></dt><dd><?=$_SESSION['add']?></dd>
  <hr class="hr2">
  <dt>メールアドレス<span class="pink">&nbsp;※</span></dt><dd><?=$_SESSION['email']?></dd>
  <hr class="hr2">
  <dt>お電話<span class="pink">&nbsp;※</span></dt><dd><?=$_SESSION['tel']?></dd>
    <hr class="hr2">
  <dt>業種</dt><dd><?=$_SESSION['businesscategory']?></dd>
   <hr class="hr2">
  <dt>使用目的<span class="pink">&nbsp;※</span></dt><dd><?=$_SESSION['purpose']?></dd>
    <hr class="hr2">
  <dt>ご用件・お問合せ</dt><dd><?=$_SESSION['comment']?></dd>
  <hr class="hr2">
</dl>






<?php
//入力項目エラー判定
if($_SESSION['inputErr']){
	echo'<p class="normalcontents"><input type="button" value="戻って修正" class="button1" onclick="history.back();"/></p>';
}else{
	echo'<p class="normalcontents">入力内容が上記でよろしければ、送信ボタンを押して下さい。</p>
<p class="normalcontents"><input name="mode" type="hidden" id="mode" value="SEND" class="button1" />
<input type="submit"  value="送信" class="button1" />
<input type="button" value="戻って修正" onclick="history.back()" class="button1" /></p>';
}
?>

</form>
<!--//フォーム確認画面-->


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
