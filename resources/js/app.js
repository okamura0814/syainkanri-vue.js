import './bootstrap';
import { getCookieValue } from './util'
import VueRouter from 'vue-router';
import store from './store'
import SaidComponent from "./components/SaidComponent";
import SyainListComponent from "./components/SyainListComponent";
import KensakuComponent from "./components/KensakuComponent";
import KensakuResultComponent from "./components/KensakuResultComponent";
import HenkouComponent from "./components/HenkouComponent";
import HenkouResultComponent from "./components/HenkouResultComponent";
import SakujoComponent from "./components/SakujoComponent";
import TuikaComponent from "./components/TuikaComponent";


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);

// vueルーディング
const router = new VueRouter({
  mode: 'history',
  routes: [
      {
        path: '/syain/syains',
        name: 'syain.list',
        component: SyainListComponent
      },

      {
        path: '/syain/kensaku',
        name: 'kensaku',
        component: KensakuComponent
      },

      {
        path: '/syain/kensakuresult',
        name: 'kensakuresult',
        component: KensakuResultComponent
      },

      {
        path: '/syain/henkou',
        name: 'henkou',
        component: HenkouComponent
      },

      {
        path: '/syain/henkouresult',
        name: 'henkouresult',
        component: HenkouResultComponent
      },

      {
        path: '/syain/sakujo',
        name: 'sakujo',
        component: SakujoComponent
      },

      {
        path: '/syain/tuika',
        name: 'tuika',
        component: TuikaComponent
      },
  ]
});



// vueでログインしてない場合に判別するために作ったクッキー（断念）
//認証がない場合は、機能が実行されない
// router.beforeEach(function (to, from, next) {
//   console.log(getCookieValue('login')+ "aa");
//   if (getCookieValue('login') === "1") {
//     // console.log(2)
//     next();
//   } else {
//     // console.log(3)
//     next();
//     // alert('ログイン認証が必要です。');
//   }
// });


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// コンポーネント登録とどのタグで出力するか設定
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('said-component', SaidComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
  // elオプションは、 id名 または class名を指定することで Vueインスタンスを紐づける範囲の要素を指定できます。

// ちなみに、el は「element」 の略です。

// class名でも指定できますが、下記のコードのように同一class名で要素が複数あるものに対して使用することはできません。

// そのため、必ず一つしか存在しない class名を指定する必要があります。
    el: '#app',
    // ルーティング機能
    router,
    // ストア機能
    store
});
