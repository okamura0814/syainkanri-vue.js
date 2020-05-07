<!-- 削除ID入力画面 -->
<template>
<!-- v-on ディレクティブを使うことで、DOM イベントの購読、イベント発火時の JavaScript の実行が可能になります。 -->
<!-- preventを付けることで submit イベントによってページがリロードされません -->
  <form v-on:submit.prevent="submit">
    <p>削除したいIDを入力してください</p>
    <!-- v-modelはscript内の同じsakujo:{id:''}と紐づけるために使用する -->
    <input type="text" name="id" v-model="sakujo.id">
    <div class="btn">
      <input type="submit" value="削除" />
    </div>
  </form>
</template>

<script>
  export default {
    // dataオプションには、Vueアプリケーション内で使用するデータを登録します。

    // この dataに定義したプロパティの値が変更されると、Viewが再レンダリングされます。

    // 関数でなくては動作しないのでfunction + return {}で書いて上げましょう
    data: function () {
      return {
        sakujo: {
          id:''
        }
      }
    },
    // methodsオプションには、Vueアプリケーション内で使用する関数を定義することができます。

    // ここで定義した関数は、v-onディレクティブを使ってイベントリスナーを加えることで呼び出すことができます。
    methods: {
      submit() {
        // axios とは Vue のドキュメントで推奨されている Ajax通信ライブラリです。
        // postでデータを送ってLaravelで登録してある/sakujoRunのAPIを実行している

        // thenで結果を受け取っている

        // 引数 res の中にステータス、ステータステキスト、データが格納されています。

        axios.post('/sakujoRun', this.sakujo).then((res) => {
          // this.$router.push で画面遷移出来ます（app.jsのrouterに登録してあるnameで画面遷移している）
          this.$router.push({name: 'syain.list'});
        });
      }
    }
  }
</script>