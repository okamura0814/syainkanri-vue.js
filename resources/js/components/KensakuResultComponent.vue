<!-- 検索結果出力画面 -->
<template>
  <table>
    <tr>
      <th>社員番号</th>
      <th>姓</th>
      <th>名</th>
      <th>年齢</th>
      <th>ユーザー名</th>
      <th>パスワード</th>
    </tr>
    <tr>
      <td>{{syain.id}}</td>
      <td>{{syain.sei}}</td>
      <td>{{syain.mei}}</td>
      <td>{{syain.nenrei}}</td>
      <td>{{syain.yuuzaamei}}</td>
      <td>{{syain.pasu}}</td>
    </tr>
  </table>
</template>

<script>
  export default {
    // computedオプション（算出プロパティ）は、dataの値を使って、それを関数で加工したデータを返すことができます。

    // プロパティですが、こちらも methods と同じように関数を使うことができます。

    // また computedオプションには、値に変更がない場合、キャッシュされたものがそのまま再利用されるという特徴があります。

    // そのため、処理が高速なことがメリットです。

    // syain関数内でストア内の情報を取得するためにゲッターを実行してsyainデータを受け取っている
    computed: {
      syain () {
        return this.$store.getters['syain/syain'];
      }
    }
  }
</script>