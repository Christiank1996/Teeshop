/**
 * THIS FILE IS GENERATED AUTOMATICALLY.
 * DO NOT EDIT.
 *
 * You are probably looking on adding startup/initialization code.
 * Use "quasar new boot <name>" and add it there.
 * One boot file per concern. Then reference the file(s) in quasar.conf.js > boot:
 * boot: ['file', ...] // do not add ".js" extension to it.
 *
 * Boot files are your "main.js"
 **/
import Vue from 'vue'
import './import-quasar.js'



import App from 'app/src/App.vue'
import Vuex from 'vuex'

import createRouter from 'app/src/router/index'




Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    user: {
      id: '',
      name: '',
      email: ''
    },
    warenkorb: {
    },
    count: 0
  },
  mutations: {
    test (state, payload) {
      state.user = payload
    },
    warenkorbAdd (state, payload) {
      state.user = payload
    },
  }
})

export default async function () {
  // create store and router instances

  const router = typeof createRouter === 'function'
    ? await createRouter({Vue})
    : createRouter


  // Create the app instantiation Object.
  // Here we inject the router, store to all child components,
  // making them available everywhere as `this.$router` and `this.$store`.
  const app = {
    router,
    store,
    render: h => h(App)
  }



  app.el = '#q-app'


  // expose the app, the router and the store.
  // note we are not mounting the app here, since bootstrapping will be
  // different depending on whether we are in a browser or on the server.
  return {
    app,

    router
  }
}
