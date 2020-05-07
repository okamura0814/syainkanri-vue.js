<!-- 変更内容入力画面 -->
<template>
  <form v-on:submit.prevent="submit">
    <p>変更したいIDを入力してください</p>
    <input type="text" name="id" v-model="henkounaiyou.id">
    <p>新しいパスワードを入力してください</p>
    <input type="text" name="pasu" v-model="henkounaiyou.pasu">
    <div class="btn">
      <input type="submit" value="変更" />
    </div>
  </form>
</template>

<script>
  export default {
    data: function () {
      return {
        henkounaiyou: {
          id:'',
          pasu:''
        }
      }
    },
    methods: {
      async submit() {
        // syainストアのkensakuアクションを呼び出す
        // dispatchはアクションを呼び出すメソッド
        await this.$store.dispatch('syain/henkou', this.henkounaiyou)

        // 変更結果画面に移動する
        this.$router.push({name: 'henkouresult'});

      }
    }
  }
</script>