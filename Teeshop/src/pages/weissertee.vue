<template>
  <!-- Div -> Container fuer die Flaeche die Designed wird -->
  <div class="flex flex-center" style="background-color: rgb(255, 244, 244)">
    <div style="width:90%">
      <q-scroll-area style="height:843px;width: 100%; background-color: #EEEEEE">
        <div class="q-pa-md">
          <div class="q-col-gutter-md row items-start">
            <div v-for="(produkt, index) in weissteetee" :key="index" class="col-6">
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
                  ab {{ produkt.preis.toFixed(2) }}€<br>
                  <span style="font-size: 13px">Inhalt: {{ inhalt }}g</span>
                </q-item-section>
              </q-item>
            </div>
          </div>
        </div>
      </q-scroll-area>
    </div>
    <q-dialog v-model="showArticle">
      <q-card style="width: 600px; max-width: 800px; background-color: #dddddd;">
        <q-item style="background-color: #dddddd; width:600px; max-width: 800px; height:330px; margin:50px 0 50px 0">
          <div v-if="weissteetee[indexNumber].id <= 4" class="absolute-bottom-right text-subtitle1 text-center"><br>
            <div id="clickable" ><b><span @click="addToCart(index)"  style="font-size: 12px; color:darkslategrey; margin-right: 65px">Zum Warenkorb hinzufügen <q-icon @click="addToCart" name="shopping_cart" size="32px"></q-icon></span></b></div>
          </div>
          <q-item-section>
            <q-img
              :src="weissteetee[indexNumber].imagename"
              style="height: 100%; width: 250px; margin: 10px"
            >
              <div v-if="weissteetee[indexNumber].id <= 4" class="absolute-bottom text-subtitle1 text-center">
                BELIEBT
              </div>
            </q-img>
          </q-item-section>
          <q-item-section style="font-size: 16px"><b>{{weissteetee[indexNumber].name}}</b><br>{{weissteetee[indexNumber].beschreibung}}
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
            <b><span style="text-align: left">Preis: {{ (inhaltDialog / 100 * this.weissteetee[this.indexNumber].preis * amount).toFixed(2) }}€</span></b><br>
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
      framework: {
        plugins: [
          'Notify'
        ],
        config: {
          notify: { /* look at QUASARCONFOPTIONS from the API card (bottom of page) */ }
        }
      },
      amount: '1',
      inhalt: '100',
      inhaltDialog: '100',
      indexNumber: '0',
      showArticle: false,
      name: '',
      summe: '',
      user_id: 2,
      alleProdukte: [],
      weissteetee: []
    }
  },
  name: 'PageIndex',
  methods: {
    changeAmount (value) {
      this.amount = value
    },
    showDialog (index) {
      this.amount = '1'
      this.showArticle = true
      this.indexNumber = index
    },
    test () {
      axios.get('http://127.0.0.1:8000/api/test').then(response => { this.name = response.data }).then(response => this.filterWeisstee())
    },
    filterWeisstee () {
      for (let i = 0; i < this.alleProdukte.length; i++) {
        if (this.alleProdukte[i].TeeKategorie === 'weisstee') {
          this.weissteetee.push(this.alleProdukte[i])
        }
        console.log(this.weissteetee)
      }
    },
    addToCart (index) {
      console.log('id = ' + this.alleProdukte[this.indexNumber].id)
      console.log('user = ' + this.user_id)
      console.log('menge = ' + this.amount)
      console.log('gewicht = ' + this.inhaltDialog)
      axios.post('http://127.0.0.1:8000/api/addCart', { produkt_id: this.alleProdukte[this.indexNumber].id, user_id: this.user_id, menge: this.amount, gewicht: this.inhaltDialog }).then(
        response => {
          this.$q.notify({
            color: 'primary',
            message: this.amount + 'x ' + this.alleProdukte[this.indexNumber].name + ' ' + this.inhaltDialog + 'g wurden ihrem Einkaufswagen hinzugefügt'
          })
          this.name = response.data
        })
      this.showArticle = false
    }
  },
  mounted () {
    axios.get('http://127.0.0.1:8000/api/alleTeesorten').then(response => { this.alleProdukte = response.data })
    this.test()
  }
}
</script>
