<!-- 検索ID入力画面 -->
<template>
  <form v-on:submit.prevent="submit">
    <p>検索したいIDを入力してください</p>
    <input type="text" name="id" v-model="syain.id">
    <div class="btn">
      <input type="submit" value="検索" />
    </div>
  </form>
</template>

<script>
  export default {
    data: function () {
      return {
        syain:{
          id:''
        }
      }
    },
    methods: {
      async submit() {
        // syainストアのkensakuアクションを呼び出す
        await this.$store.dispatch('syain/kensaku', this.syain)

        // 検索結果画面に移動する
        this.$router.push({name: 'kensakuresult'});

      }
    }
  }
</script>