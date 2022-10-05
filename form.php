<!DOCTYPE html>
<html lang="ja">
  <head>
    <link
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>高輝度蓄光反射テープ マーキン ノベルティサイト</title>
    <meta
      name="description"
      content="販促・ノベルティグッズ作成を検討中の皆様、高輝度蓄光 反射テープ マーキンが皆様のプロモーション活動を応援します。オリジナルデザインのインパクトと商品の安心感で差し上げたお客様・広告主様ともにご満足。広告主様の商品・サービスをお客様にしっかりお伝えします。"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./asset/css/sanitize.css" />
    <link rel="stylesheet" href="./asset/css/style.css" />
  </head>
  <body>
    <div class="header-wrap">
      <header class="header">
        <div class="site-logo">
          <h1 class="header-logo">タイズ株式会社</h1>
          <a href="index.html">
            <img
              src="./asset/images/site-markin-logo2.png"
              alt="法人様向けマーキンノベルティサイト"
            />
          </a>
        </div>
        <div class="header-contact">
          <ul>
            <li class="header-contacttel">
              <img
                src="./asset/images/site-contact-telfax.png"
                alt="タイズ電話番号"
              />
            </li>
            <li class="header-contacbtn">
              <a href="#">ご注文・お見積・<br class="sma" />お問い合わせ</a>
            </li>
          </ul>
        </div>
      </header>
      <nav class="header-nav">
        <ul class="header-navlist">
          <li class="header-navitem">
            <a href="index.html">ホーム</a>
          </li>
          <li class="header-navitem">
            <a href="index.html#price">価格・送料</a>
          </li>
          <li class="header-navitem">
            <a href="index.html#orijinal">オリジナル名入れ</a>
          </li>
          <li class="header-navitem">
            <a href="index.html#orijinal">入稿について</a>
          </li>
          <li class="header-navitem">
            <a href="index.html#flow">ご注文の流れ</a>
          </li>
        </ul>
      </nav>
    </div>
    <section class="section section-secondry">
      <h1 class="section-headerline">
        ご注文・お見積もり・お問い合わせフォーム
      </h1>
      <h2 class="section-headerlineh2">
        当サイトをご覧いただきありがとうございます。
      </h2>
      <p>
        お問合せ内容は月曜日～金曜日の午前9時から午後5時（土日・祝日・年末年始は除く）で確認させていただいております。<br />
        記載いただいた内容により回答までお時間をいただく場合があります。あらかじめご了承下さい。
      </p>
      <form action="contactform.php" class="form" method="post">
        <table class="form-table">
          <tr>
            <th>お問い合わせ内容</th>
            <td>
              <label class="checkbox">
                <input type="hidden" name="how" value="none" />
                <input type="checkbox" name="how1" value="購入" />ご注文
              </label>
              <label class="checkbox">
                <input
                  type="checkbox"
                  name="how2"
                  value="お見積もり"
                />お見積もり
              </label>
              <label class="checkbox">
                <input
                  type="checkbox"
                  name="how3"
                  value="その他・お問い合わせ"
                />その他・お問い合わせ
              </label>
            </td>
          </tr>
          <tr>
            <th>ご購入・お問い合わせの商品</th>
            <input type="hidden" name="body" value="none" />
            <td>
              <label class="checkbox">
                <input
                  type="checkbox"
                  name="luminousnoname"
                  value="蓄光名入れなし"
                />マーキン 高輝度 蓄光タイプ　印刷・名入れなし
              </label>
              <label class="checkbox">
                <input
                  type="checkbox"
                  name="luminousname"
                  value="蓄光名入れあり"
                />マーキン 高輝度 蓄光タイプ　印刷・名入れあり
              </label>
              <label class="checkbox">
                <input
                  type="checkbox"
                  name="reflectionnoname"
                  value="反射名入れなし"
                />マーキン 高輝度 反射タイプ　印刷・名入れなし
              </label>
              <label class="checkbox">
                <input
                  type="checkbox"
                  name="reflectionname"
                  value="反射名入れあり"
                />マーキン 高輝度 反射タイプ　印刷・名入れあり
              </label>
            </td>
          </tr>
          <tr>
            <th>
              <label for="companyname"> 会社・店舗名 ※ </label>
            </th>
            <td>
              <input
                class="input"
                type="text"
                id="companyname"
                size="30"
                name="companyname"
              />
            </td>
          </tr>
          <tr>
            <th>
              <label for="name"> ご担当者様お名前 ※ </label>
            </th>
            <td>
              <input
                class="input"
                type="text"
                id="name"
                size="30"
                name="name"
              />
            </td>
          </tr>
          <tr>
            <th>
              <label for="city">都道府県 ※ </label>
            </th>
            <td>
              <select class="select" name="city" id="city">
                <option value="">Menu 1</option>
                <option value="">Menu 2</option>
                <option value="">Menu 3</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
                <option value="">Menu 2</option>
              </select>
            </td>
          </tr>
          <tr>
            <th>
              <label for="email"> Email ※ </label>
            </th>
            <td>
              <input
                class="input"
                type="text"
                id="email"
                size="30"
                name="email"
              />
            </td>
          </tr>
          <tr>
            <th>
              <label for="tel"> 電話番号 ※ </label>
            </th>
            <td>
              <input class="input" type="tel" id="tel" size="30" name="tel" />
            </td>
          </tr>
          <tr>
            <th>
              <label for="detail">ご用件・お問い合わせ </label>
            </th>
            <td>
              <textarea
                class="textarea"
                cols="30"
                rows="10"
                id="detail"
                name="detail"
              ></textarea>
            </td>
          </tr>
        </table>
        <p class="normalcontents">
          弊社で設定した<a href="../privacypolicy.html">プライバシーポリシー</a
          >に基づき、送信いただいたお客様の情報を無断で転用、使用しない事をお約束致します。
        </p>
        <div class="form-button">
          <button class="button buttou-submission" type="submit">
            送信内容確認メールを受け取る
          </button>
        </div>
      </form>
    </section>

    <!--footer-->
    <footer id="footer">
      <section class="primary">
        <p class="logo">タイズ株式会社</p>
        <p class="address">
          〒110-0008<span class="space">東京都台東区池之端1-1-4</span
          ><span class="space">第2ワタイフラット4F</span><br />
          TEL : 03-5817-4852<span class="space">/</span
          ><span class="space">FAX</span> : 03-5817-4862
        </p>
        <div class="navi-row">
          <ul class="navi">
            <li><a href="index.html">ホーム</a></li>
            <li><a href="index.html#price">価格表・送料</a></li>
            <li><a href="index.html#orijinal">オリジナル名入れ</a></li>
            <li><a href="index.html#orijinal">入稿について</a></li>
            <li><a href="index.html#flow">ご注文の流れ</a></li>
          </ul>
          <ul class="sns-navi">
            <li>
              <a href="https://twitter.com/tiesofficial" target="_blank"
                ><i class="fab fa-twitter"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.youtube.com/watch?v=2816c3ExPW8"
                target="_blank"
                ><i class="fab fa-youtube"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.instagram.com/ties_store_official/"
                target="_blank"
                ><i class="fab fa-instagram"></i
              ></a>
            </li>
            <li>
              <a href="https://www.facebook.com/tiesofficial" target="_blank"
                ><i class="fab fa-facebook"></i
              ></a>
            </li>
          </ul>
        </div>
      </section>
      <section class="secondary">
        <ul class="sitenavi">
          <li><a href="#">サイトマップ</a></li>
          <li><a href="#">プライバシーポリシー</a></li>
        </ul>
        <p class="copyright">Copyright ties,Inc. All rights reserved.</p>
      </section>
    </footer>

    <script src=""></script>
  </body>
</html>