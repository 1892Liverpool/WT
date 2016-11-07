1. Šta je uradeno?

-Web stranica sadrži pet podstranica: home, match, team, shop i club. Svaka podstranica 
 sadrži meni koji je u svakom trenutku vidljiv na svim podstranicama i uvijek se nalazi
 pri vrhu podstranice.

-Prva podstranica "Home" se sastoji od vijesti koje se mogu listati lijevo-desno(ovo još 
 nije implementirano), slike, najave sljedece utakmice i jednog dijela tabele lige.
 Slika, najava sljedece utakmice i tablica lige se nalaze u jednom redu.

-Druga podstranica "Match" se sastoji od cijele tabele lige koja se nalazi na lijevoj
 strani, dok se najava sljedece utakmice i tabela sljedecih osam utakmica nalaze na 
 desnoj strani podstranice. Tabela sljedecih osam utakmica se nalazi ispod najave 
 sljedece utakmice. 

-Treca podstranica "Team" se sastoji od slike cijele ekipe Liverpool-a. Ispod nje se
 nalaze spisak igraca(pogledati kako to izgleda). Na kraju podstranice se nalazi forma
 gdje se moze potražiti neki igrac, tako što upišemo njegovo ime i kliknemo dugme
 "Search". Pored te forme ce biti prikaza slika traženog igraca, a pored slike podaci 
 o tom igracu. 

-Cetvrta podstranica "Shop" se sastoji slika artikala koji su u ponudi. Oni se mogu
 listati lijevo-desno(još nije implementirano). Na kraju se nalaze tri forma na kojim se
 mogu kupovati artikli. Kupovina artikala je odvojene za muškarce, žene i djecu. Kupovina
 se tako što dodamo šta sve želimo kupiti i na kraju kliknemo dugme "Buy".

-Peta podstranica "Club" se sastoji od historije i neki ostalih podataka.

2. Šta nije uradeno?

-Kao što je vec navedeno ne rade dugmadi "Back" and "Next" da bi se mogle listati 
 lijevo-desno vijest(artikli ili igraci). 

-U najavi utakmice treba dodati datum i vrijeme odigravanje utakmice.

-U podstranici "Team" nisu stavljene odgovarajuce slike i imena igraca.

-Nije implementirano pretraživanje igraca.

-U podstranici "Shop" nisu stavljene odgovarajuce slike i imena artikala, kao ni u
 formara nisu odgovarajuci artikli.

-U podstranici "Club" nije stavljen tekst o klubu.

3. Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje 
   (opis rješenja)

-Kada se podstranica smanji tekst npr.Liverpool vs Watford "pobjegne" sa svog mjesta.
 (pomocu media query se to riješava, postavi se na novu poziciju npr. koristeci margin)

-Takoder i kod podstranice "Team" elementi u formi "pobjegnu" sa svog mjesta.
 (riješava se isto pomocu margina)

-Isto je i sa podstranicom "Shop" kod elemenata u formi.

4. Bug-ovi koje ste primijetili ali ne znate rješenje

-Nisam ih uspio naci.

5. Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne recenice šta se u fajlu nalazi

LiverpoolFC.html - sadržaj podstranice "Home"
match.html - sadržaj podstranice "match"
team.html - sadržaj podstranice "team"
shop.html - sadržaj podstranice "shop"
club.html - sadržaj podstranice "club"
stilZaHome.css
stilZaMatch.css
stilZaShop.css
stilZaTeam.css
stilZaClub.css
Kod stilova imena sve govore.

