<!-- ロジック
================================================================================================ -->
<?php
session_start();

/* 以下、メール送信の処理
------------------------------------------------------------------------------------------------- */
// 送信ボタンが押されたら
if (!empty($_SESSION['token']) && $_POST['token'] === $_SESSION['token']) {
    // //フォームのボタンが押されたら、POSTされたデータを各変数に格納
    $markin = $_POST["markin"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $companyname = $_POST["companyname"];
    $detail = $_POST[" detail"];

    // メールの言語設定
    mb_language("ja");
    mb_internal_encoding("UTF-8");

    // 件名を変数subjectに格納
    $subject = "［自動送信］メッセージ内容の確認";

    // メール本文を変数bodyに格納
    $body = <<< EOM
  {$name}　様

  メッセージありがとうございます。
  以下の内容でメッセージを承りました。

  ===================================================
  < お問い合わせ内容 >
  {$how}

  < ご購入・お問い合わせの商品 >
  {$how}

  < お名前 >
  {$name}

  < メールアドレス >
  {$email}

  < メッセージ >
  {$detail}
  ===================================================

  ※当メールは送信専用となっております。
  　ご返信いただいても、お答えいたしかねますのでご了承ください。
  EOM;

    // 送信元のメールアドレスを変数fromEmailに格納(本番環境へのデプロイ時に正規のアドレスに変更すること！)
    $fromEmail = "soldierofme@gmail.com";

    // 送信元の名前を変数fromNameに格納
    $fromName = "Michi's Portfolio";

    // ヘッダ情報を変数headerに格納する
    $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";

    // 受信用のメールアドレスを変数myEmailに格納(本番環境へのデプロイ時に正規のアドレスに変更すること！)
    $myEmail = "soldierofme@gmail.com";

    // フォーム入力者へメールを送信する
    mb_send_mail($email, $subject, $body, $header);

    // サイト管理者へメールを送信する
    mb_send_mail($myEmail, $subject, $body, $header);
} else {
    // トークンが一致しない場合、不正アクセス画面へ移動する
    header(("location: alert.php"));
    exit;
}
?>

<!-- ビュー
================================================================================================ -->
<h2>送信完了</h2>
<p>メッセージありがとうございました。入力したメールアドレス宛に確認メールを送信しましたので、ご確認ください。</p>
<p>尚、数十分経過してもメールが届かない場合はメッセージが送信できていない可能性がございます。お手数ですが、トップページよりもう一度メッセージの送信をお願いいたします。</p>
<a href="index.php">
    <button class="btn" type="button">トップページに戻る</button>
</a>
