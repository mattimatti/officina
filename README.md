# officina

Ti spiego lo sbatta.

Nella cartella swipe trovi delle scansioni di illustrazioni di un campionario di giacche al vecchio stile,
dimensione a4 e pagina in cartocino tagliata a meta orizzontalmente.

il cliente, vuole che l'interazione sul carousel sia un po' come sfogliare quel catalogo.

Ho pensato che in questo caso, con uno  swipe gesture su di in un layout a carte  poteva rendere la suggestione.

Se hai componenti migliori o che già risolvono il problema per intero, proponi!


    $biggio = [];
    
    $batta[] Far coincidere le giunzioni delle immagini.
    $batta[] Montare l'html con il plugin come da esempio
    $batta[] Applicare un movimento swipe allo slieder
    
    merge_array_recursive($biggio, $sbatta); // Warning: variable $sbatta is undefined
    
    echo "ci sentiamo domani";
    
    sleep();

## per farlo partire 

(devi avere php4 installato):


    php -S 127.0.0.1:80 -t .

## Modifiche effettuate

Ho giunto le immagini in modo che siano 13 immagini col capo unito (bisogna controllare l'abbinamento del sopra col sotto, ho visto che in un sopra dice "3 bottoni" ma non trovo riscontro nell'immagine).
Purtroppo la versione di owl-Carousel usata qui non permette lo scroll verticale, per cui ho fatto uno script io che da l'effetto (ho inserito un altro plugin di jquery che mi ha semplificato l'inserimento delle animazioni via CSS). Ho fatto anche in modo che il taccuino abbia sempre la larghezza proporzionata all'altezza.

Ora funziona solo col click.

Provvederò a mettergli una copertina verosimile, modificherò lo script in modo che si possa utilizzare lo swipe su cellulare (utilizzerò questo plugin: http://labs.rampinteractive.co.uk/touchSwipe/demos/) e abbellirò le pagine dei vari capi, aggiungendo delle ombre e quant'altro (via CSS).
