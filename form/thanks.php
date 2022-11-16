<?php
// thanks.phpに直接アクセスされたときの対策　
if (empty($_POST)) {
  header('Location: form.html');
  exit();
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>高輝度蓄光反射テープ マーキン ノベルティサイト</title>
  <meta name="description" content="販促・ノベルティグッズ作成を検討中の皆様、高輝度蓄光 反射テープ マーキンが皆様のプロモーション活動を応援します。オリジナルデザインのインパクトと商品の安心感で差し上げたお客様・広告主様ともにご満足。広告主様の商品・サービスをお客様にしっかりお伝えします。" />
  <meta name="keywords" content="ノベルティ,販促品,粗品,販促グッズ,蓄光,反射材,防災グッズ,インセンティブ,人気商品,SP,オリジナル,企業様,法人様,広告,うれしい" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../asset/css/sanitize.css" />
  <link rel="stylesheet" href="../asset/css/style.css" />
</head>

<body>
  <?php
  //入力値の取得
  $ask = $_POST["ask"];
  $markin = $_POST["markin"];
  $companyname = $_POST["companyname"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $detail = $_POST["detail"];

  //回答を書き込む準備
  $line = array($ask, $markin, $companyname, $name, $email, $tel, $detail);


  //ファイルへの書き込み
  $file_name = "answer.csv";
  $fp = fopen($file_name, "a");
  //fopen(開くファイル名,追記モード)
  $return = fputcsv($fp, $line);
  fclose($fp);

  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  // 自分への通知メールの送信
  $to ="soldierofme@gmail.com";
  $title ="お問い合わせがありました";
  $ext_header ="From:{$email}";
  $body = <<<EOM
  ----------------------------------------
  お問い合わせがありました
  お問い合わせ内容：{$ask}
  ご購入・お問い合わせの商品:{$markin}
  会社名：{$companyname}
  お名前：{$name}
  Eメール:{$email}
  電話番号：{$tel}
  ご用件・お問い合わせ：{$detail}
  ----------------------------------------
  EOM;

  // メール送信の実行
  $rc = mb_send_mail($to, $title,$body,$ext_header);
  if(!$rc){
    exit;
  } else {
  //送信が完了したらセッションをクリアして二重送信を防ぐ
    $_SESSION = NULL;
  }



  // 入力者への自動返信メールの送信
  $to2 ="{$email}";
  $title2 ="お問い合わせありがとうございました";
  $ext_header2 ="From:lightwalker@lightwalker.jp";
  $body2 = <<<EOM
  お問い合せ、誠にありがとうございました。
  以下の内容で送信を受け付けました。

  送信いただいてから5日以内に返事がない場合、
  お手数ですが、再度フォームより送信いただくか
  または下記までご連絡ください。
  TEL : 03-5817-4852
  MAIL : lightwalker@lightwalker.jp

  ----------------------------------------
  {$companyname}
  {$name}様

  お問い合わせ内容：{$ask}

  ご購入・お問い合わせの商品:{$markin}

  会社名：{$companyname}

  お名前：{$name}

  Eメール:{$email}

  電話番号：{$tel}

  ご用件・お問い合わせ：{$detail}

  ----------------------------------------
  EOM;

  $rc2 = mb_send_mail($to2, $title2,$body2,$ext_header2);
  if(!$rc2){
    exit;
  } else {
  //送信が完了したらセッションをクリアして二重送信を防ぐ
    $_SESSION = NULL;
  }


  ?>


  <section class="section" id="flow">
    <h1 class="section-headerline">送信完了</h1>
      <?php
      if ($return) {
        $result_message = <<<EOM
        <p>メッセージありがとうございました。入力したメールアドレス宛に確認メールを送信しましたので、ご確認ください。</br>
　      尚、送信いただいてから5日以内に返事がない場合はお手数ですが、再度フォームより送信いただくか、または下記までご連絡ください。</p>
EOM;
      } else {
        $result_message = "エラーが発生しました。";
      }
      ?>
    <p> <?php print $result_message; ?></p>
    <p class="thanks_tel">TEL : 03-5817-4852</p>
    <br />
    <button class="button thanks" type="button">
      <a href="../index.html">トップページに戻る</a>
    </button>
  </section>
  <!--footer-->
  <footer id="footer">
    <section class="primary">
      <p class="logo">タイズ株式会社</p>
      <p class="address">
        〒110-0008<span class="space">東京都台東区池之端1-1-4</span><span class="space">第2ワタイフラット4F</span><br />TEL :
        03-5817-4852<span class="space">/</span><span class="space">FAX</span> : 03-5817-4862
      </p>
      <div class="navi-row">
        <ul class="navi">
          <li><a href="../index.html">ホーム</a></li>
          <li><a href="../index.html#price">価格表・送料</a></li>
          <li><a href="../index.html#orijinal">オリジナル名入れ</a></li>
          <li><a href="../index.html#orijinal">入稿について</a></li>
          <li><a href="../index.html#flow">ご注文の流れ</a></li>
        </ul>
        <ul class="sns-navi">
          <li>
            <a href="https://twitter.com/tiesofficial" target="_blank"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="https://www.youtube.com/watch?v=2816c3ExPW8" target="_blank"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/ties_store_official/" target="_blank"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="https://www.facebook.com/tiesofficial" target="_blank"><i class="fab fa-facebook"></i></a>
          </li>
        </ul>
      </div>
    </section>
    <section class="secondary">
      <ul class="sitenavi">
        <li><a href="../company.html">会社概要</a></li>
        <li><a href="privacypolicy.html">プライバシーポリシー</a></li>
      </ul>
      <p class="copyright">Copyright ties,Inc. All rights reserved.</p>
    </section>
  </footer>
  <script src=""></script>
</body>

</html>
