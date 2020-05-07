<!-- 社員情報一覧画面 -->
<template>
  <table>
    <tr>
      <th>社員番号</th>
      <th>姓</th>
      <th>名</th>
      <th>年齢</th>
      <th>ユーザー名</th>
    </tr>
    <!-- v-forとは、配列から要素を取り出したいときに使える -->
    <!-- v-forとは、オブジェクトからkeyやvalue、indexを取り出したいときに使える -->

    <!-- Vue.jsのスタイルガイドによると、v-forディレクティブを使う際、keyを指定することは必須のようです。 -->
    <tr v-for="syain in syains" v-bind:key="syain.id">
      <td>{{syain.id}}</td>
      <td>{{syain.sei}}</td>
      <td>{{syain.mei}}</td>
      <td>{{syain.nenrei}}</td>
      <td>{{syain.yuuzaamei}}</td>
    </tr>
  </table>
</template>

<script>
  export default {
    data: function () {
      return {
        syains: []
      }
    },
    // methods内のメソッドは書いただけでは実行されない使うには呼び出す必要がある
    methods: {
      getSyains() {
        axios.get('/syains').then((res) => {
          this.syains = res.data;
        });
      }
    },
    // ここでgetSyains()を実行させている
    mounted() {
      this.getSyains();
    }
  }
</script>