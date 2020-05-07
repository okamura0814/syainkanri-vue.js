import Vue from 'vue'
import Vuex from 'vuex'

import syain from './syain'

Vue.use(Vuex)

const store = new Vuex.Store({
  // ストアを作成する際に、インポートした syain.js をモジュールとして登録しています

  // ストアは種類に応じてモジュールとして分けて作成することができます
  modules: {
    syain
  }
})

export default store