<!-- 変更実行後結果出力画面 -->
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
    computed: {
      syain () {
        return this.$store.getters['syain/syain'];
      }
    }
  }
</script>