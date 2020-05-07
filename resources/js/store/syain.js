// データを入れるためのステート
// ステートはデータの入れ物そのものです。ログイン中のユーザーデータなどが該当します
const state = {
  syain: null
}

// ゲッター
// ゲッターはステートの内容から算出される値です。ステートとゲッターの関係はコンポーネントでいうとデータ変数と算出プロパティの関係と同様でしょう。上の例を用いると「ユーザーがログイン中であるかどうか」をゲッターで表現することができます
const getters = {
  syain(state) {
    return state.syain
  }
}

// mutationsには同期処理を書く
// ミューテーションはステートを更新するためのメソッドです。コンポーネントはステートを直接変更することができない仕組みになっていて、ミューテーションを介してステートを更新します。後述のアクションと異なり、ミューテーションは同期処理でなければいけません
const mutations = {
  // セッター
  setSyain(state, syain){
    state.syain = syain
  }
}

// actionsには非同期処理を書く
// アクションもミューテーションと同様にステートを更新するメソッドですが、ミューテーションとの違いはアクションは非同期処理である点です。アクションは API との通信などの非同期処理を行った後にミューテーションを呼び出してステートを更新する
const actions = {

  async kensaku (context, data){
    const response = await axios.post('/kensakuRun', data);
    context.commit('setSyain',response.data);
  },

  async henkou (context, data){
    const response = await axios.post('/henkouRun', data);
    context.commit('setSyain',response.data);
  },

  async tuika (context, data){
    const response = await axios.post('/tuikaRun', data);
    context.commit('setSyain',response.data);
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}