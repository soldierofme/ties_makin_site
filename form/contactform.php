<!DOCTYPE html>
<html lang="ja">

<head>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>高輝度蓄光反射テープ マーキン ノベルティサイト</title>
    <meta name="description" content="販促・ノベルティグッズ作成を検討中の皆様、高輝度蓄光 反射テープ マーキンが皆様のプロモーション活動を応援します。オリジナルデザインのインパクトと商品の安心感で差し上げたお客様・広告主様ともにご満足。広告主様の商品・サービスをお客様にしっかりお伝えします。" />
    <meta name="keywords" content="ノベルティ,販促品,粗品,販促グッズ,蓄光,反射材,防災グッズ,インセンティブ,人気商品,SP,オリジナル,企業様,法人様,広告,うれしい">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../asset/css/sanitize.css" />
    <link rel="stylesheet" href="../asset/css/style.css" />
</head>

<body>
    <div class="header-wrap">
        <header class="header">
            <div class="site-logo">
                <a href="../index.html">
                    <img src="../asset/images/site-markin-logo3.png" alt="法人様向けマーキンノベルティサイト" />
                </a>
            </div>
            <div class="header-contact">
                <ul>
                    <li class="header-contacttel">
                        <img src="../asset/images/site-contact-telfax2.png" alt="" />
                    </li>
                    <li class="header-contacbtn">
                        <a href="../form/form.html">ご注文・お見積・<br class="sma" />お問い合わせ</a>
                    </li>
                </ul>
            </div>
        </header>
        <!--headerナビゲーション-->
        <nav class="header-nav">
            <ul class="header-navlist">
                <li class="header-navitem">
                    <a href="../index.html">ホーム</a>
                </li>
                <li class="header-navitem">
                    <a href="../index.html#price">価格・送料</a>
                </li>
                <li class="header-navitem">
                    <a href="../index.html#orijinal">オリジナル名入れ</a>
                </li>
                <li class="header-navitem">
                    <a href="../index.html#orijinal">入稿について</a>
                </li>
                <li class="header-navitem">
                    <a href="../index.html#flow">ご注文の流れ</a>
                </li>
            </ul>
        </nav>
    </div>
    <!--フォーム本文-->
    <section class="section section-secondry">
        <h1 class="section-headerline">
            ご注文・お見積もり・お問い合わせフォーム
        </h1>
        <h2 class="section-headerlineh2">
            お問い合わせ内容をご確認の上、送信ボタンをクリックしてください。
        </h2>
        <p>
            お問合せ内容は月曜日～金曜日の午前9時から午後5時（土日・祝日・年末年始は除く）で確認させていただいております。<br />
            記載いただいた内容により回答までお時間をいただく場合があります。あらかじめご了承下さい。
        </p>
        <?php
        //入力値の取得とチェック
        $companyname = htmlspecialchars($_POST["companyname"], ENT_QUOTES, "UTF-8");
        if (empty($companyname)) {
            echo "<p>会社・店舗名を入力してください。</p>";
            exit;
        }
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8");
        if (empty($name)) {
            echo "<p>ご担当者様お名前を入力してください。</p>";
            exit;
        }
        $email = htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8");
        if (empty($email)) {
            echo "<p>メールアドレスを入力してください。</p>";
            exit;
        }
        $tel = htmlspecialchars($_POST["tel"], ENT_QUOTES, "UTF-8");
        if (empty($tel)) {
            echo "<p>電話番号を入力してください。</p>";
            exit;
        }
        $detail = htmlspecialchars($_POST["detail"], ENT_QUOTES, "UTF-8");


        //問い合わせ内容、ご購入・お問い合わせの商品が1つもチェックされていなければなしと記載
        if (empty($_POST["ask"])) {
            $ask = "なし";
        } else {
            $ask = implode("  ", $_POST["ask"]);
        }
        if (empty($_POST["markin"])) {
            $markin = "なし";
        } else {
            $markin = implode("  ", $_POST["markin"]);
        }





        $_SESSION["companyname"] = $companyname;
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["tel"] = $tel;
        $_SESSION["detail"] = $detail;
        $_SESSION["ask"] = $ask;
        $_SESSION["markin"] = $markin;
        ?>

        <form action="thanks.php" name="form" method="post">
            <table class="form-table">
                <tr>
                    <input type="hidden" name="ask" value="none" />
                    <th>お問い合わせ内容</th>
                    <td>
                        <?php echo $ask; ?>
                    </td>
                </tr>
                <tr>
                    <th>ご購入・お問い合わせの商品</th>
                    <td>
                    <?php echo $markin; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="companyname"> 会社・店舗名 ※ </label>
                    </th>
                    <td>
                        <?= $companyname ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="name"> ご担当者様お名前 ※ </label>
                    </th>
                    <td>
                        <?= $name ?>
                    </td>
                </tr>
                <th>
                    <label for="email"> Email ※ </label>
                </th>
                <td>
                    <?= $email ?>
                </td>
                </tr>
                <tr>
                    <th>
                        <label for="tel"> 電話番号 ※ </label>
                    </th>
                    <td>
                        <?= $tel ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="detail">ご用件・お問い合わせ </label>
                    </th>
                    <td>
                        <?=  nl2br($detail) ?>
                    </td>
                </tr>
            </table>
            <div class="form-button">
            <input class="button-third" type="button" onclick="history.back()" value="戻る">
               <button class="button buttou-submission" type="submit">送信</button>
            </div>
            <!-- hiddenフィールド -->
            <input type="hidden" name="ask" value="<?php echo $ask; ?>">
            <input type="hidden" name="markin" value="<?php echo $markin; ?>">
            <input type="hidden" name="companyname" value="<?php echo $companyname; ?>">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="detail" value="<?php echo $detail; ?>">
        </form>
    </section>

    <!--footer-->
    <footer id="footer">
        <section class="primary">
            <p class="logo">タイズ株式会社</p>
            <p class="address">
                〒110-0008<span class="space">東京都台東区池之端1-1-4</span><span class="space">第2ワタイフラット4F</span><br />
                TEL : 03-5817-4852<span class="space">/</span><span class="space">FAX</span> : 03-5817-4862
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
                <li><a href="#">会社概要</a></li>
                <li><a href="../privacypolicy.html">プライバシーポリシー</a></li>
            </ul>
            <p class="copyright">Copyright ties,Inc. All rights reserved.</p>
        </section>
    </footer>

    <script src=""></script>
</body>

</html>
