<template>
  <q-layout view="lHh Lpr lFf">
    <q-drawer
      side="right"
      v-model="right"
      show-if-above
      :width="390"
      overlay
      :breakpoint="500"
      content-class="bg-grey-3"
      style="border: solid thin"
    >
      <q-scroll-area class="fit">
        <q-list>

          <template>
            <q-item style="background-color: #6574cd">
              <q-item-section avatar style="font-size: 22px">
                Warenkorb
                <q-icon name="shopping_cart" size="32px"></q-icon>
              </q-item-section>
            </q-item>
            <div>
              <span v-for="(waren, index) in warenkorb" :key="index">
            <q-item class="row" clickable @click="showEmit">
              <q-item-section class="col-1"><b>{{ waren.menge + 'x'}}</b></q-item-section>
              <q-item-section class="col-2"><b>{{ waren.gewicht_warenkorb + 'g'}}</b></q-item-section>
              <q-item-section class="col-7" style="word-break: break-all;"><b>{{ waren.name}}</b></q-item-section>
              <q-item-section class="col-3"><b>{{ priceMethod(waren.preis, waren.menge, waren.gewicht_warenkorb) }}</b></q-item-section>
            </q-item>
                <q-separator/>
              </span>
              <q-separator style="height:10px"/>
              <q-item style="font-size: 17px">
              <q-item-section class="col-9"><b>Summe:</b></q-item-section>
                <q-item-section class="col-3"><b> {{ this.summe }}€</b></q-item-section>
              </q-item>
            </div>
          </template>

        </q-list>
      </q-scroll-area>
    </q-drawer>
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
          <q-icon @click="right = !right" name="shopping_cart" size="32px" style="margin-right: 10px"/>
          <q-badge floating align="top">{{countWarenkorb()}}</q-badge>
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

import axios from 'axios'

export default {
  name: 'MainLayout',
  data () {
    return {
      userid: 2,
      right: true,
      menu: false,
      menuOver: false,
      listOver: false,
      warenkorb: [],
      summArray: [],
      summe: 0,
      text: ''
    }
  },
  methods: {
    showEmit () {
      this.$emit('test')
    },
    test () {
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
      return this.warenkorb.length
    },
    priceMethod (menge, preis, gewicht) {
      const price = menge * preis * gewicht / 100
      if (price.toString().indexOf('.') !== -1) return price.toFixed(2).toString().replaceAll('.', ',') + '€'
      return price + '€'
    },
    summMethod () {
      for (let i = 0; i < this.warenkorb.length; i++) {
        console.log('test')
        this.summe += this.warenkorb[i].menge * this.warenkorb[i].preis * this.warenkorb[i].gewicht_warenkorb / 100
      }
      this.summe = this.summe.toFixed(2).replaceAll('.', ',')
    },
    getWarenkorb () {
      axios.post('http://127.0.0.1:8000/api/getWarenkorb', { id: this.userid }).then(response => {
        this.warenkorb = response.data
        this.summMethod()
      })
    }
  },
  mounted () {
    this.getWarenkorb()
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
