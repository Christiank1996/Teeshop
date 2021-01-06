<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class artikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produkt')->insert([
            'name' => 'BIO CHINA LUNG CHING',
            'art' => 'gruentee',
            'beschreibung' => 'Unsere seit Jahren bewährte Premiumqualität des "Drachenbrunnen" Tees aus biologischem Anbau.',
            'imagename' => 'Bilder/Grüner Tee/Gruentee_Bio_China_Lung_Ching.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'CHINA MAO FENG',
            'art' => 'gruentee',
            'beschreibung' => 'Ein wahrer Topseller. Mild, sanft mit frischem, aromatischen Geschmack in bester "Criss cross" Qualität.',
            'imagename' => 'Bilder/Grüner Tee/Gruentee_China_Mao_Feng.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'CHINA YIN ZHEN',
            'art' => 'gruentee',
            'beschreibung' => 'Der König der Weißen Tees. Chinesische Teekultur in Perfektion. Außergewöhnlich zart mit heller Tasse.',
            'imagename' => 'Bilder/Grüner Tee/Gruentee_China_Yin_Zhen.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'CHINA WHITE MONKEY',
            'art' => 'gruentee',
            'beschreibung' => 'Wohlschmeckende, seltene Rarität mit edler Herkunft aus einem der besten Anbaugebiete Chinas.',
            'imagename' => 'Bilder/Grüner Tee/Gruentee_China_White_Monkey.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'JAPAN SENCHA MIYAKO',
            'art' => 'gruentee',
            'beschreibung' => 'Ein wirklich guter Sencha zum günstigen Preis. Voller, etwas kräftigerer, würziger Geschmack.',
            'imagename' => 'Bilder/Grüner Tee/Gruentee_Japan_Sencha_Miyako.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'BIO JAPAN SENCHA UJI',
            'art' => 'gruentee',
            'beschreibung' => 'Bioqualität zum günstigen Preis. Hochwertig und spritzig-quirlig wie ein junger Bachlauf.',
            'imagename' => 'Bilder/Grüner Tee/Gruentee_Bio_Japan_Sencha_Uji.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'SENCHA GABALONG',
            'art' => 'gruentee',
            'beschreibung' => 'Feinster Grüntee aus Japan mit würzigerem Geschmack und goldgelber Tassenfarbe. Hoher Gammaglubinsäure-Gehalt.',
            'imagename' => 'Bilder/Grüner Tee/Gruentee_Sencha_Gabalong.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'GYKURO HIMMELSWIESE',
            'art' => 'gruentee',
            'beschreibung' => 'Edler Top-Gyokuro. Der feine Nachtschattentee mit tief dunkelgrünem, seidig glänzendem Teeblatt.',
            'imagename' => 'Bilder/Grüner Tee/Gruentee_Gyokuro-Himmelswiese.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'FORMOSA OOLONG',
            'art' => 'oolongtee',
            'beschreibung' => 'Hohe Qualität zum günstigen Preis. Auch für Oolong-Einsteiger und -Vieltrinker bestens geeignet.',
            'imagename' => 'Bilder/Oolong Tee/Oolong_Tee_Formosa_Oolong.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'FORMOSA FANCY OOLONG',
            'art' => 'oolongtee',
            'beschreibung' => 'Ein bewährter Klassiker. Geschmacklich stärker ausgeprägt und viel interessanter als normale Oolongs.',
            'imagename' => 'Bilder/Oolong Tee/Oolong_Tee_Formosa_Fancy_Oolong.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'SUPERIOR FANCY OOLONG',
            'art' => 'oolongtee',
            'beschreibung' => 'Nur meisterhafte Handarbeit kann solch ein einzigartiges, facettenreich ausgeprägtes Aroma erzeugen.',
            'imagename' => 'Bilder/Oolong Tee/Oolong_Tee_Superior_Fancy_Oolong.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'FOUR SEASONS OOLONG',
            'art' => 'oolongtee',
            'beschreibung' => 'Milder, jadefarben aufgießender Oolong aus Vietnam mit leichten Erd-Noten und feiner Süße im Abgang.',
            'imagename' => 'Bilder/Oolong Tee/Oolong_Tee_Four_Seasons_Oolong.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'ORANGENBLÜTEN OOLONG',
            'art' => 'oolongtee',
            'beschreibung' => 'Edel und stylisch. Die Vereinigung von Oolong Tee mit zarten Orangenblüten und einem Hauch Orangenöl.',
            'imagename' => 'Bilder/Oolong Tee/Oolong_Tee_Orangenblueten_Oolong.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'MILKY OOLONG',
            'art' => 'oolongtee',
            'beschreibung' => 'Unser grandioser Oolong mit unglaublich verführerischem, elegantem Sahne-Milch Bouquet.',
            'imagename' => 'Bilder/Oolong Tee/Oolong_Tee_Milky_Oolong.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'GELBER TEE KEKECHA',
            'art' => 'oolongtee',
            'beschreibung' => 'Gelber Tee aus China mit besonders niedrigem Koffeingehalt. Bei uns in hoher Verarbeitungsqualität.',
            'imagename' => 'Bilder/Oolong Tee/Oolong_Tee_Gelber_Tee_Kekecha.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'BIO PAO CHUNG POUCHONG',
            'art' => 'oolongtee',
            'beschreibung' => 'Selten erhältlicher China Grüntee. Leicht anfermentiert, mit zarter Süße und elegantem Geschmack.',
            'imagename' => 'Bilder/Oolong Tee/Oolong_Tee_Bio_Pao_Chung_Pouchong.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'JAVA MALABAR OP',
            'art' => 'schwarzertee',
            'beschreibung' => 'Sehr gerne empfehlen wir diesen selten angebotenen, herzhaften, indonesischen Hochland Qualitätstee.',
            'imagename' => 'Bilder/Schwarzer Tee/Schwarzer_Tee_Java_Malabar_Op.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'PERSISCHE MISCHUNG',
            'art' => 'schwarzertee',
            'beschreibung' => 'Unsere traditionelle Teemischung aus dem mittleren Osten mit würzig, vollem Geschmack.',
            'imagename' => 'Bilder/Schwarzer Tee/Schwarzer_Tee_Persische_Mischung.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'TÜRKISCH HOCHLAND',
            'art' => 'schwarzertee',
            'beschreibung' => 'Kräftiger, sehr ergiebiger Hochland Tee nach bester türkischer Geschmackstradition.',
            'imagename' => 'Bilder/Schwarzer Tee/Schwarzer_Tee_Tuerkisch_Hochland.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'GRUSINISCHE BLATTMISCHUNG',
            'art' => 'schwarzertee',
            'beschreibung' => 'Zarte Süße mit feinen rauchigen Tönen zeigt dieser angenehm, milde Schwarze Tee nach klassisch georgischer Art.',
            'imagename' => 'Bilder/Schwarzer Tee/Schwarzer_Tee_Grusinische_Blattmischung.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'OSTFRIESISCHER SONNTAGS-TEE',
            'art' => 'schwarzertee',
            'beschreibung' => 'Der Festtags-Klassiker. Gemischt aus feinsten Assam- und Ceylontees. Veredelt mit echter Bourbon-Vanille.',
            'imagename' => 'Bilder/Schwarzer Tee/Schwarzer_Tee_Ostfriesischer_Sonntagstee.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'ENGLISH BREAKFAST TEA',
            'art' => 'schwarzertee',
            'beschreibung' => 'Perfekt zum Frühstück. Kräftiger Broken-Tee mit vollem Aroma und liebt natürlich auch Milch/Sahne.',
            'imagename' => 'Bilder/Schwarzer Tee/Schwarzer_Tee_English_Breakfast_Tee.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'ENGLISCHE BLATTMISCHUNG',
            'art' => 'schwarzertee',
            'beschreibung' => 'Very british. Unsere Kreation aus Assam, Ceylon und Darjeeling Tees für gehobene englische Ansprüche.',
            'imagename' => 'Bilder/Schwarzer Tee/Schwarzer_Tee_Englische_Blattmischung.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'FIVE O CLOCK TEA',
            'art' => 'schwarzertee',
            'beschreibung' => 'Der kräftig, würzige Klassiker für eine stilvolle Teestunde nach bester englischer Art.',
            'imagename' => 'Bilder/Schwarzer Tee/Schwarzer_Tee_Five_o_Clock_Tee.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'JASMIN DRAGON PEARLS',
            'art' => 'weissertee',
            'beschreibung' => 'Die berühmten Drachen-Perlen aus weißem Tee mit edlem Jasmin. Ein Hochgenuss vom Feinsten.',
            'imagename' => 'Bilder/Weißer Tee/Weisser_Tee_Jasmin_Dragon_Pearls.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'BIO GRANATAPFEL KIRSCH',
            'art' => 'weissertee',
            'beschreibung' => 'Eine Traumkombination. Weißer Biotee, feine Kirschen und orientalischer Granatapfel.',
            'imagename' => 'Bilder/Weißer Tee/Weisser_Tee_Bio_Granatapfel_Kirsch.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'WEISSE BEERE',
            'art' => 'weissertee',
            'beschreibung' => 'Beeindruckend köstlich. Weißer Tee vereint mit einem Quartett edler Beerenfrüchte.',
            'imagename' => 'Bilder/Weißer Tee/Weisser_Tee_Weisse_Beere.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'BIO EARL GREEN',
            'art' => 'weissertee',
            'beschreibung' => 'Betörende Bergamott- und Jasmin Düfte harmonieren mit elegantem Weißen Bio-Tee.',
            'imagename' => 'Bilder/Weißer Tee/Weisser_Tee_Bio_Earl_Green.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'TAUSEND LEBEN',
            'art' => 'weissertee',
            'beschreibung' => 'Weißer Tee und eine Menge Kräuter und Früchte, die es in sich haben.',
            'imagename' => 'Bilder/Weißer Tee/Weisser_Tee_Tausend_Leben.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'WHITE CARAMEL',
            'art' => 'weissertee',
            'beschreibung' => 'Cremige Karamellstücke und zartsüßer Weißer Biotee. Wer kann da schon widerstehen?',
            'imagename' => 'Bilder/Weißer Tee/Weisser_Tee_White_Caramel.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'BIO WEISSER WINTERTRAUM',
            'art' => 'weissertee',
            'beschreibung' => 'Ein wahrer Hochgenuss. Weißer Tee und winterliche Gewürze in bester Bio-Qualität.',
            'imagename' => 'Bilder/Weißer Tee/Weisser_Tee_Bio_Weisser_Wintertraum.jpg'
        ]);
        DB::table('produkt')->insert([
            'name' => 'BIO CHINA PAI MU TAN',
            'art' => 'weissertee',
            'beschreibung' => 'Weißer Tee. Wir führen für Sie eine seit Jahrzehnten bewährte Spitzenqualität aus biologischem Anbau.',
            'imagename' => 'Bilder/Weißer Tee/Weisser_Tee_Bio_China_Pai_Mu_Tan.jpg'
        ]);

    }
}
