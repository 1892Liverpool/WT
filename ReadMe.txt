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

