Esercizio di oggi: PHP Strong Password Generator
nome repo: php-strong-password-generator
_Descrizione_
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
_Milestone 1_
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php.
In Allegato avete un esempio di form nel caso non aveste fantasia.
_Milestone 2_
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
_Milestone 3 (BONUS)_
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $\_SESSION recupererà la password da mostrare all’utente.
_Milestone 4 (BONUS)_
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

NUMERO DI PUSH MINIMO: 7

_SCOMPOSIZIONE PROBLEMA_
1-Definisco la struttura html ispirandomi all'immagine di reference
2-Creo un form che detremini la lunghezza della password che verrà generata
3-Definisco una funzione che generei un password casuale (composta da lettere, lettere maiuscole, numeri e simboli)
4-Definisco un file dove insrisco le funzioni
5-Recupero le funzioni con import
6-Definisco la struttura della pagina a cui reindirizzare l'utente una volta generata la password
7-Definisco altri parametri per la password
