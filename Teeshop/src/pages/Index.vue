<template>
  <!-- Div -> Container fuer die Flaeche die Designed wird -->
  <div class="flex flex-center" style="background-color: rgb(255, 244, 244)">
  <div style="width:90%; border: solid 2px; margin-top: 10px; border-color: darkgrey">
    <q-scroll-area style="height:843px;width: 100%; background-color: #EEEEEE">
    <div class="q-pa-md">
      <div class="q-col-gutter-md row items-start">
        <div v-for="(produkt, index) in alleProdukte" :key="produkt.id" class="col-6">
          <q-item clickable style="background-color: #dddddd" @click="showDialog(index)">
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
              <q-item-section style="font-size: 18px">
                <b>{{produkt.name}}</b><br>{{produkt.beschreibung}}<br><br>
                ab {{produkt.preis}}€<br>
                <span style="font-size: 13px">Inhalt: 100g</span>
              </q-item-section>
          </q-item>
        </div>
      </div>
    </div>
    </q-scroll-area>
  </div>
    <q-dialog v-model="showArticle" style="">
        <q-card style="width: 600px; max-width: 800px; background-color: #dddddd;">
          <q-item style="background-color: #dddddd; width: 100%; height:330px; margin:50px 0 50px 0">
            <div v-if="alleProdukte[indexNumber].id <= 4" class="absolute-bottom-right text-subtitle1 text-center">
              <b><span style="font-size: 12px; color:darkslategrey">Zum Warenkorb hinzufügen</span></b>
              <q-icon id="test" name="add" style="font-size:3em; margin-right: 65px" @click="addToCart"></q-icon>
          </div>
            <q-item-section>
              <q-img
                :src="alleProdukte[indexNumber].imagename"
                style="height: 100%; width: 250px; margin: 10px"
              >
                <div v-if="alleProdukte[indexNumber].id <= 4" class="absolute-bottom text-subtitle1 text-center">
                  BELIEBT
                </div>
              </q-img>
            </q-item-section>
            <q-item-section style="font-size: 18px"><b>{{alleProdukte[indexNumber].name}}</b><br>{{alleProdukte[indexNumber].beschreibung}}
            <br><br>
              <span><b>Menge:</b><q-btn-dropdown color="primary" :label="amount" style="font-size: 15px; width: 150px">
                <q-list>
                  <q-item clickable v-close-popup @click="changeAmount(1)">
                    <q-item-section>
                      <q-item-label>1</q-item-label>
                    </q-item-section>
                  </q-item>

                  <q-item clickable v-close-popup @click="changeAmount(2)">
                    <q-item-section>
                      <q-item-label>2</q-item-label>
                    </q-item-section>
                  </q-item>

                  <q-item clickable v-close-popup @click="changeAmount(3)">
                    <q-item-section>
                      <q-item-label>3</q-item-label>
                    </q-item-section>
                  </q-item>

                  <q-item clickable v-close-popup @click="changeAmount(4)">
                    <q-item-section>
                      <q-item-label>4</q-item-label>
                    </q-item-section>
                  </q-item>

                  <q-item clickable v-close-popup @click="changeAmount(5)">
                    <q-item-section>
                      <q-item-label>5</q-item-label>
                    </q-item-section>
                  </q-item>
                </q-list>
              </q-btn-dropdown></span>
            </q-item-section>
          </q-item>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>

import axios from 'axios'
export default {
  data () {
    return {
      name: '',
      amount: '1',
      indexNumber: '0',
      showArticle: false,
      alleProdukte: []
    }
  },
  name: 'PageIndex',
  methods: {
    showDialog (index) {
      this.amount = '1'
      this.showArticle = true
      this.indexNumber = index
    },
    test () {
      axios.get('http://127.0.0.1:8000/api/test').then(response => { this.name = response.data })
    },
    changeAmount (value) {
      this.amount = value
    },
    addToCart () {
      console.log('id = ' + this.alleProdukte[this.indexNumber])
      axios.post('http://127.0.0.1:8000/api/addCart', { id: this.alleProdukte[this.indexNumber].id, amount: this.amount }).then(response => { this.name = response.data })
    }
  },
  mounted () {
    axios.get('http://127.0.0.1:8000/api/alleTeesorten').then(response => { this.alleProdukte = response.data }).then(response => console.log('alle Produkte = ' + this.alleProdukte))
    this.test()
  }
}
</script>
<style>
#test {
  cursor: pointer;
}
</style>
