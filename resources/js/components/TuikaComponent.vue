<!-- 社員情報追加入力画面 -->
<template>
  <form v-on:submit.prevent="submit">
    <p>姓を入力してください</p>
    <input type="text" name="sei" v-model="tuikanaiyou.sei">
    <p>名を入力してください</p>
    <input type="text" name="mei" v-model="tuikanaiyou.mei">
    <p>年齢を入力してください</p>
    <input type="text" name="nenrei" v-model="tuikanaiyou.nenrei">
    <p>ユーザー名を入力してください</p>
    <input type="text" name="yuuzaamei" v-model="tuikanaiyou.yuuzaamei">
    <p>パスワードを入力してください</p>
    <input type="text" name="pasu" v-model="tuikanaiyou.pasu">
    <div class="btn">
      <input type="submit" value="ユーザー追加" />
    </div>

  </form>
</template>

<script>
  export default {
    data: function () {
      return {
        tuikanaiyou: {
          sei:'',
          mei:'',
          nenrei:'',
          yuuzaamei:'',
          pasu:''
        }
      }
    },
    methods: {
      submit() {
        axios.post('/tuikaRun', this.tuikanaiyou).then((res) => {
        this.$router.push({name: 'syain.list'});
        });
      }
    }
  }
</script>