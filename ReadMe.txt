#Spirala 3 

1. Zadatak

-Serijalizacija podataka se vrsi kod registracije, promjene sifre, pretrage igraca na podstranici 
team i kod user page ukoliko se admin prijavi. 
-Kod registracije korisnika podaci koji se serijalizuju su: username, email i password. Serijalizacija
navedenih podataka se vrsi tako sto se kreira xml fajl. Ime xml fajla je username, 
a u tom fajl se nalazi email i password. Uradena je validacija u php-u i u javascript-u.
-Kod promjene sifre vrsi se promjena upisanog passworda u xml fajlu. Uradena je validacija 
u php i javascript.
-Kod pretrage igraca serijalizuje se tekst koji se unosi i username korisnika koji je vrsio pretragu.
Ukoliko nije prijavljen ni jedan korisnik, onda se umjesto username pise anonymous kao ime xml fajla. 
-Kod user page se vrsi serijalizacija artikala koje shop posjeduje, ali samo u slucaju kada
se prijavi admin. Ukoliko se prijavio obicni korisnik tada on samo moze da vidi spisak artikala 
i da vrsi pretragu korisnika koja ce biti poslije objasnjenja. Admin ima sve opcije kao i 
obicni korisnik i jos neke dodatne. Dodatne opcije su brisanje korisnika (brisanje xml fajla
koji pripada tom korisniku), rad sa artiklima (dodavanje, brisanje i promjena artikala u shopu),
generisanje PDF-a sa svim artiklima koje shop posjeduje i download csv file koji sadrzi 
sve artikle i kojoj vrsti artikal pripada (muski, zenski i djeciji artikal). Uradena je 
validacija u php-u i javascript-u.

2. Zadatak

Adminu je omoguceno download podataka(spisak artikala) u obliku csv fajla. Button za download
je smjesten u dnu user page stranice. Kod za download je u index.php fajlu.

3. Zadatak

Admin ima opciju generisanja izvjestaja o spisku artikala u obliku pdf-a. Button za download
je smjesten u dnu user page stranice. Kod za izvjesta je u index.php fajlu. Za generisanje 
izvjestaja koristena je FPDF PHP klasa.

4. Zadatak 

Pretraga je smjestena na user page stranici. Posto nije evidentirano ime i prezime korisnika, 
pretraga se vrsi po username-u i email-u korisnika, iako nema nekog smisla da obicni korisnik moze
vidjet imena i email-ove drugih korisnika.

#Spirala 2

1. �ta je uradeno?

-Sva polja u formi imaju JavaScript validaciju. Na podstranici "team" uradena je validacija 
 pri pretrazi igraca. Ukoliko se unese broj u imenu ili se ostavi prazno polje izbacit ce 
 gre�ku. Na podstranici "shop" validacija nije potrebna jer je kori�ten "select". Ne mo�e 
 se ubaciti nepostojeci artikal.

-Carousel je uraden na podstranici "home". Kori�ten je za pregled novih vijesti.

-LocalStorage je uraden na svakoj formi(na podstranici "team" i "shop").

-Ajax je uraden, ali u posebnom je dokumentu "sa Ajaxom". Kada sam dodao ajax forme i 
 button-i nisu radili, nisam stigao da implementiram da sve to radi zajedno.

2. �ta nije uradeno?

-Primjer Carousel-a ima samo na jednoj podstranici "home". Treba i na jo� dvije podstranice
 ("team" i "home") primjeniti.To nisam stigao implementirati.

-Problem kada implementiram ajax nisam rije�io. Kada ga implementiram ne rade ni forme ni 
 button-i. To sam mislio rije�iti koristeci jquery tako �to bi prepravio vec postojece funkcije.

-Pretraga igraca nije u potpunosti uradena.

3. Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rje�enje 
   (opis rje�enja)

-"Nema"

4. Bug-ovi koje ste primijetili ali ne znate rje�enje

-Pozicija button-a nije ista kada se otvara na Firefox odnosno na Google Chrome.

-Kada otvorim podstranicu "home" i kada prelazim mi�em preko imena neke druge podstranice
 nije isti efekat kada otvorim neku drugu podstranicu i prelazim mi�em preko imena neke 
 druge podstranice.

5. Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne recenice �ta se u fajlu nalazi

Samo su napisani dodani fajlovi.
home.js - JavaScript file slu�i za Carousel.
team.js - JavaScript file slu�i za pretragu igraca.
shop.js - JavaScript file slu�i za online kupovinu.

U folderu "sa Ajaxom" nalazi vecina gotovo istih fajlova uz samo male promjene.
npr. club_ajax.html je gotovo identican kao club.html, samo je izbacen meni iz html
ajax.js - JavaScript file slu�i za implementaciju ajax-a

#Spirala 1

1. �ta je uradeno?

-Web stranica sadr�i pet podstranica: home, match, team, shop i club. Svaka podstranica 
 sadr�i meni koji je u svakom trenutku vidljiv na svim podstranicama i uvijek se nalazi
 pri vrhu podstranice.

-Prva podstranica "Home" se sastoji od vijesti koje se mogu listati lijevo-desno(ovo jo� 
 nije implementirano), slike, najave sljedece utakmice i jednog dijela tabele lige.
 Slika, najava sljedece utakmice i tablica lige se nalaze u jednom redu.

-Druga podstranica "Match" se sastoji od cijele tabele lige koja se nalazi na lijevoj
 strani, dok se najava sljedece utakmice i tabela sljedecih osam utakmica nalaze na 
 desnoj strani podstranice. Tabela sljedecih osam utakmica se nalazi ispod najave 
 sljedece utakmice. 

-Treca podstranica "Team" se sastoji od slike cijele ekipe Liverpool-a. Ispod nje se
 nalaze spisak igraca(pogledati kako to izgleda). Na kraju podstranice se nalazi forma
 gdje se moze potra�iti neki igrac, tako �to upi�emo njegovo ime i kliknemo dugme
 "Search". Pored te forme ce biti prikaza slika tra�enog igraca, a pored slike podaci 
 o tom igracu. 

-Cetvrta podstranica "Shop" se sastoji slika artikala koji su u ponudi. Oni se mogu
 listati lijevo-desno(jo� nije implementirano). Na kraju se nalaze tri forma na kojim se
 mogu kupovati artikli. Kupovina artikala je odvojene za mu�karce, �ene i djecu. Kupovina
 se tako �to dodamo �ta sve �elimo kupiti i na kraju kliknemo dugme "Buy".

-Peta podstranica "Club" se sastoji od historije i neki ostalih podataka.

2. �ta nije uradeno?

-Kao �to je vec navedeno ne rade dugmadi "Back" and "Next" da bi se mogle listati 
 lijevo-desno vijest(artikli ili igraci). 

-U najavi utakmice treba dodati datum i vrijeme odigravanje utakmice.

-U podstranici "Team" nisu stavljene odgovarajuce slike i imena igraca.

-Nije implementirano pretra�ivanje igraca.

-U podstranici "Shop" nisu stavljene odgovarajuce slike i imena artikala, kao ni u
 formara nisu odgovarajuci artikli.

-U podstranici "Club" nije stavljen tekst o klubu.

3. Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rje�enje 
   (opis rje�enja)

-Kada se podstranica smanji tekst npr.Liverpool vs Watford "pobjegne" sa svog mjesta.
 (pomocu media query se to rije�ava, postavi se na novu poziciju npr. koristeci margin)

-Takoder i kod podstranice "Team" elementi u formi "pobjegnu" sa svog mjesta.
 (rije�ava se isto pomocu margina)

-Isto je i sa podstranicom "Shop" kod elemenata u formi.

4. Bug-ovi koje ste primijetili ali ne znate rje�enje

-Nisam ih uspio naci.

5. Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne recenice �ta se u fajlu nalazi

LiverpoolFC.html - sadr�aj podstranice "Home"
match.html - sadr�aj podstranice "match"
team.html - sadr�aj podstranice "team"
shop.html - sadr�aj podstranice "shop"
club.html - sadr�aj podstranice "club"
stilZaHome.css
stilZaMatch.css
stilZaShop.css
stilZaTeam.css
stilZaClub.css
Kod stilova imena sve govore.

