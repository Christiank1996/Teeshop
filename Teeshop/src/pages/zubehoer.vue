<template>
  <!-- Div -> Container fuer die Flaeche die Designed wird -->
  <div class="flex flex-center" style="background-color: rgb(255, 244, 244)">
    <div style="width:90%; border: solid 2px; margin-top: 10px; border-color: darkgrey">
      <q-scroll-area style="height:843px;width: 100%; background-color: #EEEEEE">
        <div class="q-pa-md">
          <div class="q-col-gutter-md row items-start">
            <div v-for="produkt in alleProdukte" :key="produkt.id" class="col-6">
              <q-item style="background-color: #dddddd">
                <q-item-section>
                  <q-img
                    :src="produkt.imagename"
                    style="height: 100%; width: 250px; margin: 10px"
                  >
                    <div v-if="produkt.id <= 4" class="absolute-bottom text-subtitle1 text-center">
                      BELIEBT
                    </div>
                  </q-img>
                </q-item-section>
                <q-item-section style="font-size: 18px"><b>{{produkt.name}}</b><br>{{produkt.beschreibung}}</q-item-section>
              </q-item>
            </div>
          </div>
        </div>
      </q-scroll-area>
    </div>
  </div>
</template>

<script>

import axios from 'axios'
export default {
  data () {
    return {
      name: '',
      alleProdukte: []
    }
  },
  name: 'PageIndex',
  methods: {
    test () {
      axios.get('http://127.0.0.1:8000/api/test').then(response => { this.name = response.data })
    }
  },
  mounted () {
    axios.get('http://127.0.0.1:8000/api/alleTeesorten').then(response => { this.alleProdukte = response.data }).then(console.log(this.alleProdukte))
    this.test()
  }
}
</script>
