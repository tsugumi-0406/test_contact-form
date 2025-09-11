<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>


<body>
    <header class="header">
        <div class="header__inner">
            <h2 class="header__logo">
                Fashionably Late
            </h2>
        </div>
    </header>

    <main>
      <div class="contact-form__content">
        <div class="contact-form__heading">
          <h2>Contact</h2>
        </div>

        <div class="contact-form__main">
          <form class="form" action="/admin">
            <div class="form__frame">
              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">お名前</span>
                  <span class="form__label--item__red">※</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="text" name="first_name" class="first_name" placeholder="例:山田" />
                  </div>
                  <div class="form__input--text">
                    <input type="text" name="last_name" class="last_name" placeholder="例:太郎" />
                  </div>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                </div>
              </div>

              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">性別</span>
                  <span class="form__label--item__red">※</span>
                </div>
                <div class="form__group-content__gender">
                  <div class="form__input--text">
                    <label class="radio_wrapper">
                      <input type="radio" name="gender" value="male" checked>
                      <span>男性</span>
                    </label>
                  </div>
                  <div class="form__input--text">
                    <label class="radio_wrapper">
                      <input type="radio" name="gender" value="female">
                      <span>女性</span>
                    </label>
                  </div>
                  <div class="form__input--text">
                    <label class="radio_wrapper">
                      <input type="radio" name="gender" value="other">
                      <span>その他</span>
                    </label>
                  </div>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                </div>
              </div>


              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">メールアドレス</span>
                  <span class="form__label--item__red">※</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="email" name="email" class="form__input--email" placeholder="例:test@example.com" />
                  </div>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                </div>
              </div>


              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">電話番号</span>
                  <span class="form__label--item__red">※</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="text" name="tel1" id="tel1" class="form__input--tel" placeholder="080" />-
                    <input type="text" name="tel2" id="tel2" class="form__input--tel" placeholder="1234" />-
                    <input type="text" name="tel3" id="tel3" class="form__input--tel" placeholder="5678" />
                  </div>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                </div>
              </div>

              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">住所</span>
                  <span class="form__label--item__red">※</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="text" name="address" id='address' class="form__input--address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                  </div>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                </div>
              </div>

              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="text" name="building" id='building' class="form__input--building" placeholder="例:千駄ヶ谷マンション101" />
                  </div>
                </div>
              </div>

              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">お問い合わせの種類</span>
                  <span class="form__label--item__red">※</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--category">
                    <select name="category" class="form__input--select">
                        <option selected hidden>選択してください</option>
                        <option value="商品のお届けについて">1.商品のお届けについて</option>
                        <option value="商品の交換について">2.商品の交換について</option>
                        <option value="商品トラブル">3.商品トラブル</option>
                        <option value="ショップへのお問い合わせ">4.ショップへのお問い合わせ</option>
                        <option value="その他">5.その他</option>
                    </select>
                  </div>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                </div>
              </div>

              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">お問い合わせ内容</span>
                  <span class="form__label--item__red">※</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <textarea  cols="50" rows="5" name="detail" class="form__input--detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
                  </div>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                </div>
              </div>
            </div>

            <div class="form__button">
              <button class="form__button-submit" type="submit">確認画面</button>
            </div>
          </form>
        </div>
    </div>
</main>
</html>