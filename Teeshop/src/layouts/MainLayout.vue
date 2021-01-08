<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated style="background-image: linear-gradient(to right, rgba(197,229,175,1), rgba(43,118,65,1))">
      <q-toolbar style="height:180px;">
        <img src="~src/assets/tasse_logo2.png" style="width:50px; margin-left: 15px"/>
        <q-toolbar-title style="font-size: 33px; color:black; font-weight: bold">
          Teeshop
        </q-toolbar-title>
        <q-input dark dense standout="white" v-model="text" input-class="text-right" class="q-ma-md" :style="this.$q.platform.is.mobile ? 'width:150px' : 'width:400px'">
          <template v-slot:append>
            <q-icon v-if="text === ''" name="search" />
            <q-icon v-else name="clear" class="cursor-pointer" @click="text = ''" />
          </template>
        </q-input>
        <q-btn flat style="margin-right: 15px">
          <q-icon name="shopping_cart" size="32px" style="margin-right: 30px"/>
        </q-btn>
        <q-btn flat style="margin-right: 5px">
          <q-icon name="account_circle" size="32px" style="margin-right: 30px"/>
        </q-btn>
      </q-toolbar>
    </q-header>
    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>

const linksData = [
  {
    title: 'Docs',
    caption: 'quasar.dev',
    icon: 'school',
    link: 'https://quasar.dev'
  },
  {
    title: 'Github',
    caption: 'github.com/quasarframework',
    icon: 'code',
    link: 'https://github.com/quasarframework'
  },
  {
    title: 'Discord Chat Channel',
    caption: 'chat.quasar.dev',
    icon: 'chat',
    link: 'https://chat.quasar.dev'
  },
  {
    title: 'Forum',
    caption: 'forum.quasar.dev',
    icon: 'record_voice_over',
    link: 'https://forum.quasar.dev'
  },
  {
    title: 'Twitter',
    caption: '@quasarframework',
    icon: 'rss_feed',
    link: 'https://twitter.quasar.dev'
  },
  {
    title: 'Facebook',
    caption: '@QuasarFramework',
    icon: 'public',
    link: 'https://facebook.quasar.dev'
  },
  {
    title: 'Quasar Awesome',
    caption: 'Community Quasar projects',
    icon: 'favorite',
    link: 'https://awesome.quasar.dev'
  }
]

export default {
  name: 'MainLayout',
  data () {
    return {
      essentialLinks: linksData,
      text: ''
    }
  },
  methods: {
    test () {
      console.log('works')
    }
  }
}
</script>
