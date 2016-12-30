nizNaslova = ["Reds go top of Premier League with win" , 
	      "Jürgen Klopp: I'm really happy, but we can still improve" , 
	      "Hendo: We've got nothing yet, we have to keep going" , 
	      "'Klopp has brought a winning mentality to LFC'" , 
              "Firmino: We'll give everything to be successful this season"] 
nizSlika = [ "http://www.squawka.com/news/wp-content/uploads/2016/11/4880149.jpg",
             "http://e1.365dm.com/16/02/16-9/20/jurgen-klopp-liverpool-thumbs-up_3412823.jpg?20160208152020",
	     "http://cdn-01.belfasttelegraph.co.uk/sport/football/premier-league/article34611290.ece/033ed/AUTOCROP/w620/PANews%20BT_P-c5bb4b00-d3ff-4e1f-a592-5ddfd8bdd51a_I1.jpg",
	     "https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/default/0001/31/thumb_30088_default_news_size_5.jpeg",
             "https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/default/0001/31/thumb_30187_default_news_size_5.jpeg"]
var i = 0;
function lijevo(){

	if(i != 0){
		var x1 = document.getElementsByName("naslov1")[0];
		var x2 = document.getElementsByName("naslov2")[0];
		var x3 = document.getElementsByName("naslov3")[0];

		var s1 = document.getElementsByName("slika1")[0].getElementsByTagName('img')[0];
		var s2 = document.getElementsByName("slika2")[0].getElementsByTagName('img')[0];
		var s3 = document.getElementsByName("slika3")[0].getElementsByTagName('img')[0];
		
		s1.src = nizSlika[i - 1];
		s2.src = nizSlika[i];
		s3.src = nizSlika[i + 1];

		x1.innerHTML = nizNaslova[i - 1];
		x2.innerHTML = nizNaslova[i];
		x3.innerHTML = nizNaslova[i + 1];
		i--;
	}
	
}

function desno(){

	if(i != 2){
	
		var x1 = document.getElementsByName("naslov1")[0];
		var x2 = document.getElementsByName("naslov2")[0];
		var x3 = document.getElementsByName("naslov3")[0];

		var s1 = document.getElementsByName("slika1")[0].getElementsByTagName('img')[0];
		var s2 = document.getElementsByName("slika2")[0].getElementsByTagName('img')[0];
		var s3 = document.getElementsByName("slika3")[0].getElementsByTagName('img')[0];	

		s1.src = nizSlika[i + 1];
		s2.src = nizSlika[i + 2];
		s3.src = nizSlika[i + 3];
			
		x1.innerHTML = nizNaslova[i + 1];
		x2.innerHTML = nizNaslova[i + 2];
		x3.innerHTML = nizNaslova[i + 3];

		i++;
	}
	
}
