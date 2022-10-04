<?php
    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
        $how1 = $_POST["how1"];
        $how2 = $_POST["how2"];
        $how3 = $_POST["how3"];
        $luminousnoname = $_POST["luminousnoname"];
        $luminousname = $_POST["luminousname"];
        $reflectionname = $_POST["reflectionname"];
        $name = $_POST["name"];
        $city = $_POST["city"];
        $email  = $_POST["email"];
        $tel  = $_POST["tel"];
        $detail  = $_POST["detail"];
    }

    // 送信ボタンが押されたら
    if (isset($_POST["submit"])) {
        // 送信ボタンが押された時に動作する処理をここに記述する

        // 日本語をメールで送る場合のおまじない
            mb_language("ja");
        mb_internal_encoding("UTF-8");

        //mb_send_mail("@gmail.com", "メール送信テスト", "メール本文");

            // 件名を変数subjectに格納
            $subject = "［自動送信］お問い合わせ内容の確認";

            // メール本文を変数bodyに格納
        $body = <<< EOM
{$name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お問い合わせ内容 】
{$how1}
{$how2}
{$how3}

【 ご購入・お問い合わせの商品 】
{$luminousnoname}
{$luminousname}
{$reflectionnoname}
{$reflectionname}

【 メール 】
{$email}

【 電話番号 】
{$tel}

【 会社・店舗名 】
{$companyname}

【 ご担当者様お名前 】
{$name}

【 ご用件・お問い合わせ 】
{$detai}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;

        // 送信元のメールアドレスを変数fromEmailに格納
        $fromEmail = "soldierofme@gmail.com";

        // 送信元の名前を変数fromNameに格納
        $fromName = "お問い合わせテスト";

        // ヘッダ情報を変数headerに格納する
        $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

        // メール送信を行う
        mb_send_mail($email, $subject, $body, $header);

        // サンクスページに画面遷移させる
        header("Location: http://testapp.hippy.jp/contact/thanks.php");
        exit;
    }
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2></div>
<div>
    <form action="confirm.php" method="post">
            <input type="hidden" name="how1" value="<?php echo $how1; ?>">
             <input type="hidden" name="how2" value="<?php echo $how2; ?>">
            <input type="hidden" name="how3" value="<?php echo $how3; ?>">
            <input type="hidden" name="luminousnoname" value="<?php echo $luminous-noname; ?>">
            <input type="hidden" name="luminousnoname" value="<?php echo $luminous-noname; ?>">
            <input type="hidden" name="luminousnoname" value="<?php echo $luminous-noname; ?>">
            <input type="hidden" name="luminousnoname" value="<?php echo $luminous-noname; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="item" value="<?php echo $item; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>お問い合わせ内容</label>
                    <p><?php echo $how1; ?></p>
                </div>
                <div>
                    <label>ふりがな</label>
                    <p><?php echo $furigana; ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $email; ?></p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo $tel; ?></p>
                </div>
                <div>
                    <label>性別</label>
                    <p><?php echo $sex ?></p>
                </div>
                <div>
                    <label>お問い合わせ項目</label>
                    <p><?php echo $item; ?></p>
                </div>
                <div>
                    <label>お問い合わせ内容</label>
                    <p><?php echo nl2br($content); ?></p>
                </div>
            </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</body>
</html>
