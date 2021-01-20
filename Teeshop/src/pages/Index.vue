<template>
  <!-- Div -> Container fuer die Flaeche die Designed wird -->
  <div class="flex flex-center" style="background-color: rgb(255, 244, 244)">
  <div style="width:90%">
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
            <div v-if="index <= 3" class="absolute-bottom text-subtitle1 text-center">
              BELIEBT
            </div>
          </q-img>
            </q-item-section>
              <q-item-section style="font-size: 18px">
                <b>{{produkt.name}}</b><br>{{produkt.beschreibung}}<br><br>
                ab {{ (2.5 * inhalt).toString().substr(0, ((2.5 * inhalt).toString().length) - 2) + ',' + (2.5 * inhalt).toString().substr(((2.5 * inhalt).toString().length - 2)) }}€<br>
                <span style="font-size: 13px">Inhalt: {{ inhalt }}g</span>
              </q-item-section>
          </q-item>
        </div>
      </div>
    </div>
    </q-scroll-area>
  </div>
    <q-dialog v-model="showArticle" style="">
        <q-card style="width: 600px; max-width: 800px; background-color: #dddddd;">
          <q-item style="background-color: #dddddd; width:600px; max-width: 800px; height:330px; margin:50px 0 50px 0">
            <div v-if="alleProdukte[indexNumber].id <= 4" class="absolute-bottom-right text-subtitle1 text-center"><br>
              <div id="clickable" ><b><span @click="addToCart"  style="font-size: 12px; color:darkslategrey; margin-right: 65px">Zum Warenkorb hinzufügen <q-icon @click="addToCart" name="shopping_cart" size="32px"></q-icon></span></b></div>
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
            <q-item-section style="font-size: 16px"><b>{{alleProdukte[indexNumber].name}}</b><br>{{alleProdukte[indexNumber].beschreibung}}
            <br><br>
              <span><b>Menge:</b><q-btn-dropdown color="primary" :label="amount" style="font-size: 14px; width: 60px">
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
              </q-btn-dropdown>
              <b>Gramm:</b><q-btn-dropdown color="primary" :label="inhaltDialog + 'g'" style="font-size: 14px; width: 78px">
                <q-list>
                  <q-item clickable v-close-popup @click="inhaltDialog = 50">
                    <q-item-section>
                      <q-item-label>50g</q-item-label>
                    </q-item-section>
                  </q-item>

                  <q-item clickable v-close-popup @click="inhaltDialog = 100">
                    <q-item-section>
                      <q-item-label>100g</q-item-label>
                    </q-item-section>
                  </q-item>

                  <q-item clickable v-close-popup @click="inhaltDialog = 200">
                    <q-item-section>
                      <q-item-label>200g</q-item-label>
                    </q-item-section>
                  </q-item>

                  <q-item clickable v-close-popup @click="inhaltDialog = 500">
                    <q-item-section>
                      <q-item-label>500g</q-item-label>
                    </q-item-section>
                  </q-item>
                </q-list>
              </q-btn-dropdown></span><br>
              <b><span style="text-align: left">Preis: {{ (2.5 * inhaltDialog * amount).toString().substr(0, ((2.5 * inhaltDialog * amount).toString().length) - 2) + ',' + (2.5 * inhaltDialog * amount).toString().substr(((2.5 * inhaltDialog * amount).toString().length - 2)) }}€</span></b><br>
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
      inhalt: '100',
      inhaltDialog: '100',
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
#clickable {
 cursor: pointer;
}
</style>
