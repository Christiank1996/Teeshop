<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated style="background-image: linear-gradient(to right, rgba(197,229,175,1), rgba(43,118,65,1))">
      <q-toolbar style="height:130px;">
        <img src="~src/assets/TeeSymbol.png" style="width:170px; margin-left: 15px" @click="pushMethod(5)"/>
        <q-btn
        style="border: solid thin; width: 10%; text-align: center; align-items: center; background-color: rgba(0,0,0,0.2);"
        class="flex flex-center"
        @click="pushMethod(0)"
        @mouseover="test"
      >Grüner Tee</q-btn>
        <q-btn
        style="border: solid thin; width: 10%; text-align: center; align-items: center; background-color: rgba(0,0,0,0.2);"
        class="flex flex-center"
        @click="pushMethod(1)"
        @mouseover="test"
      >Oolong Tee</q-btn>
        <q-btn
        style="border: solid thin; width: 10%; text-align: center; align-items: center; background-color: rgba(0,0,0,0.2);"
        class="flex flex-center"
        @click="pushMethod(2)"
        @mouseover="test"
      >Schwarzer Tee</q-btn>
        <q-btn
        style="border: solid thin; width: 10%; text-align: center; align-items: center; background-color: rgba(0,0,0,0.2);"
        class="flex flex-center"
        @click="pushMethod(3)"
        @mouseover="test"
      >Weißer Tee</q-btn>
        <q-btn
        style="border: solid thin; width: 10%; text-align: center; align-items: center; background-color: rgba(0,0,0,0.2);"
        class="flex flex-center"
        @click="pushMethod(4)"
        @mouseover="test"
      >Zubehör</q-btn>

        <!--<q-btn @click="test" class="bg-positive">test Button</q-btn> -->
        <q-toolbar-title style="font-size: 33px; color:black; font-weight: bold">
        </q-toolbar-title>
        <q-input dark dense standout="white" v-model="text" input-class="text-right" class="q-ma-md" :style="this.$q.platform.is.mobile ? 'width:150px' : 'width:400px'">
          <template v-slot:append>
            <q-icon v-if="text === ''" name="search" />
            <q-icon v-else name="clear" class="cursor-pointer" @click="text = ''" />
          </template>
        </q-input>
        <q-btn flat style="margin-right: 15px">
          <q-icon name="shopping_cart" size="32px" style="margin-right: 10px"/>
          <q-badge floating align="top" v-bind:style="$q.dark.isActive ? 'bg-dark' : {background: '#F2C037', color: 'black'}">{{countWarenkorb()}}</q-badge>
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

export default {
  name: 'MainLayout',
  data () {
    return {
      menu: false,
      menuOver: false,
      listOver: false,
      text: ''
    }
  },
  methods: {
    test () {
      this.$store.commit('test', { id: '4', name: 'chris' })
      console.log('id = ' + this.$store.state.user.id)
      console.log('name = ' + this.$store.state.user.name)
      console.log('email = ' + this.$store.state.user.email)
    },
    pushMethod (value) {
      switch (value) {
        case 0:
          this.$router.push('/gruenertee')
          break
        case 1:
          this.$router.push('/oolongtee')
          break
        case 2:
          this.$router.push('/schwarzertee')
          break
        case 3:
          this.$router.push('/weissertee')
          break
        case 4:
          this.$router.push('/zubehoer')
          break
        case 5:
          this.$router.push('/')
          break
      }
    },
    countWarenkorb () {
      let i = 0
      for (let z = 0; z < this.$store.state.warenkorb.length; z++) {
        i += this.$store.state.warenkorb[z].anzahl
      }
      return i
    }
  }
}
</script>
<style>
button {
  margin-left: 5px;
  margin-right: 5px;
  height: 40px;
}
.q-btn {
  font-size: 18px;
}
</style>
