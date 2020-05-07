<template>
  <div class='col-sm-2 col-md-2 sidebar bg-primary yoko'>
    <ul class='nav nav-sidebar'>
      <!-- 名前を付けたルートにリンクするには、 router-link コンポーネントの to プロパティにオブジェクトを渡します -->

      <!-- router-linkタグはデフォルトでは正しい href と共に <a> タグとして描画しますが、 tag プロパティを設定することも可能です -->
      <router-link tag="li" v-bind:to="{name: 'syain.list'}">
        <a>一覧</a>
      </router-link>
      <router-link tag="li" v-bind:to="{name: 'kensaku'}">
        <a>検索</a>
      </router-link>
      <router-link tag="li" v-bind:to="{name: 'tuika'}">
        <a>追加</a>
      </router-link>
      <router-link tag="li" v-bind:to="{name: 'henkou'}">
        <a>変更</a>
      </router-link>
      <router-link tag="li" v-bind:to="{name: 'sakujo'}">
        <a>削除</a>
      </router-link>
    </ul>
  </div>
</template>

<script>
 export default {}
</script>