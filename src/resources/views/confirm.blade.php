<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
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
        <h2>Confirm</h2>
      </div>
      <form class="form">
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value="サンプルテキスト" />
              </td>
            </tr>
             <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <input type="text" name="gender" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="電話番号" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="住所" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="建物名" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="category" value="カテゴリー" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="detail" value="問い合わせ内容" class="detail" />
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <div class="form__link">
          <a href="" class="form__link-correction">修正</a>
        </div>
        </div>
        
      </form>
    </div>
  </main>
</body>

</html>