<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beagle</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://info.tm.edu.ro:8088/~mcraiu/style.css">
</head>
<body>
<div class="topnav">
<a href="http://info.tm.edu.ro:8088/~mcraiu/acasa.php" class="button">Acasa</a>
<a href="http://info.tm.edu.ro:8088/~mcraiu/anatomie.php" class="button">Anatomie</a>
<a href="http://info.tm.edu.ro:8088/~mcraiu/rase.php" class="button">Rase</a>
<a href="http://info.tm.edu.ro:8088/~mcraiu/contact.php" class="button">Contact</a>
<input type="text" placeholder="Search..">
</div>
<style>
body.home { 
  background: url("2wall.jpg") no-repeat center fixed; 
  background-size: cover;
}
body {
    background-color: peachPuff;
}
a.button:link, a:visited {
  background-color: firebrick;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
a.button:hover, a:active {
  background-color: black;
}
.topnav {
  overflow: hidden;
  background-color: firebrick;;
}
.topnav a.active {
  background-color: black;
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
div.gallery {
  margin-left: 18px;
  margin-right: 7px;
  margin-top:15px;
  margin-bottom:20px;
  border: 1px solid firebrick;
  float: left;
}

div.gallery:hover {
  border: 1px solid black;
  background-color: firebrick;
  color:white;
}

div.gallery img {
  width: 230px;
  height: 170px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
#h1
{   
    text-decoration:underline;
    font-style:italic;
    font-family:"Verdana";
    font-size: 35px;
    color:firebrick;
    text-shadow: 2px 2px 5px black;
}
#p{
   text-indent: 70px;
   font-size: 22px;
   line-height: 0.9;
  }
#pp{
   font-style:bold;
   color:firebrick;
   text-indent: 70px;
   font-size: 24px;
   line-height: 0.9;
  }

.column {
  float: left;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


#im1 img{
  margin-top: auto;
  float:right;
  margin-right:5px;
  border: 1px firebrick;
  background-color: firebrick;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}


#im2 img{
  float:left;  
  margin-right:5px;
  border: 1px firebrick;
  background-color: firebrick;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}

#l1 {
    margin-right: 500px;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: solid;
    border-left-style: none;
    font-style:bold;
    font-family:"Courier";
    font-size: 25px;
    color:#990066;
    text-shadow: 2px 2px 5px gray;
   }

#l2 {
    margin-left: 430px;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: solid;
    border-left-style: none;
    font-style:bold;
    font-family:"Courier";
    font-size: 25px;
    color:#990066;
    text-shadow: 2px 2px 5px gray;
   }
</style>

<h id="h1"><center> Beagle </center></h>

<div class="i" id="im1"><img src="https://www.animalepierdute.ro/wp-content/uploads/2019/06/Un-adult-din-rasa-Beagle-214x300.jpg" style=width=500px; height=400px;> </div>

<p id="p">Beagle este o rasă de câini cu corp masiv, robust, craniu lat, urechi mari, ochi cu expresie rugătoare, blană de lungime medie, picioare puternice, asemănător cu Foxhoundul englez. Rasa este de origine din Anglia, exemplarele au 25–40 cm înălțime, greutate de 9–17 kg și trăiesc 12–15 ani. Beagle mai este un concurent ai rasei jagdterrier.</p>

<li id="l1">Istorie</li>
<p id="p">Sunt mai multe teorii referitoare la apariția rasei Beagle. Una dintre ele precizează că preocuparea pentru dezvoltarea acestei rase s-a manifestat pentru prima dată în Anglia, în secolul al XVI-lea. Regina Elisabeta I (1533-1603) a îndrăgit foarte mult o varietate de talie mică a acestei rase, așa numiții „Pocket Beagle”, din care creștea o întreagă haită. Și astăzi, varietatea mai mică a rasei (exemplarele până în 25 de centrimetri înălțime la greabăn) poartă numele reginei. De-a lungul secolului al XVII-lea rasa a suferit modificări prin încrucișarea cu exemplare de Terrier Englezesc.</p>
<p id="p">O altă teorie susține că primul Beagle a apărut în Grecia Antică, în jurul secolului al V-lea î.Hr. Primele atestări apar în scrierile lui Xenophon care menționa folosirea unui câine la vânătoarea de animale mici, adulmecându-le. Istoria lor continuă odată cu apariția romanilor, care au prețuit acești câini și care i-au răspândit pe teritoriul întregii Europe, în special în zonele care astăzi aparțin de Imperiul Britanic. În Anglia, William Cuceritorul ar fi adus primul câine Beagle, pe numele său Talbot, prin secolul XI. Primele informații precise despre această rasă apar în secolul al XVI-lea.</p>

<div id="im2"><img src="https://www.animalepierdute.ro/wp-content/uploads/2019/06/Un-c%C3%A2ine-din-rasa-Beagle-pe-plaj%C4%83-extrem-de-atent-%C5%9Fi-de-interesat-la-ce-se-%C3%AEnt%C3%A2mpl%C4%83-%C3%AEn-jurul-s%C4%83u-300x225.jpg" width=400px; height=300px;> </div>

<li id="l2">Descriere</li>
<div class="row">
  <div class="column">
<p id="pp">Media de vârstă:</p>
<p id="p">12-15 ani</p>
<p id="pp">Înalțime:</p>
<p id="p">25-38 cm</p>
<p id="pp">Greutate:</p>
<p id="p">9-14 kg</p>
</div>
  <div class="column">
<p id="pp">Temperament:</p>
<p id="p">Jucăuș, sociabil, energic și inteligent</p>
<p id="pp">Dresaj:</p>
<p id="p">Dresajul este relativ ușor, dacă se face cu multă răbdare</p>
<p id="pp">Culori:</p>
<p id="p">Maro cu alb, maro cu alb și cu negru</p>
</div>
</div>

<div id="im1"><img src="https://www.animalepierdute.ro/wp-content/uploads/2019/06/Un-Beagle-f%C4%83c%C3%A2nd-ceea-ce-%C5%9Ftie-mai-bine-s%C4%83-fac%C4%83-un-c%C3%A2ine-din-aceast%C4%83-ras%C4%83-alearg%C4%83-300x200.jpg" width=400px; height=300px;> </div>

<li id="l1">Personalitate</li>
<p id="p">Este un câine vioi și jucăuș și este foarte atașat de stăpân. Este bine de știut și faptul că se împrietenește foarte repede cu copiii. De asemenea, firea sa sociabilă îl va face să nu aibă niciun fel de probleme nici cu persoanele străine, deci nu vă puneţi niciodată baza într-un Beagle să vă apare de hoţi, căci şi dacă va intra un străin la el în curte nu va avea absolut nicio problemă.</p>

<p id="p">Beagle tolerează și prezența altor câini sau a altor animale de companie. În general acești câini nu latră mult, decât dacă sunt plictisiți, dar atunci când o fac sunt gălăgioşi.</p>

<p id="p">Puiul va avea tendința de a pleca singur în momentul în care simte un miros care să-i atragă atenția. Dacă nu va fi dresat, acesta nu va răspunde atunci când va fi strigat și se va ocupa de activitatea care îi place. Este indicat să aibă cât mai multe jucării și oase pe care să le roadă, pentru a nu distruge ce găsește în casă, în cazul în care nu aveţi suficient timp să îl scoatei afară, la aer şi mişcare.</p>

<div id="im2"><img src="https://www.animalepierdute.ro/wp-content/uploads/2019/06/Rare-sunt-momentele-%C3%AEn-care-ve%C5%A3i-vedea-un-c%C3%A2ine-Beagle-c%C4%83-st%C4%83-lini%C5%9Ftit-300x200.jpg" width=400px; height=300px;> </div>

<li id="l2">Problemele de sănătate</li>
<p id="p">Nu are mari pretenții, dar trebuie hrănit cu produse de înaltă calitate. Se pretează atât la hrana uscată, cât și la hrană umedă și semi-umedă (din conservă). Năpârlește pe toată durata anului, destul de consistent, cu accent la schimbarea sezoanelor. Sunt câini robuști, rezistenți, fără probleme deosebite de sănătate. Cataracta, o boală considerată ereditară la această rasă. Manifestă uneori afecțiuni ale coloanei, pe care o pun deseori la încercare, fiind atletici și plini de energie. Una dintre cele mai grave probleme ce o poate întâmpina un Beagle, pe măsură ce îmbătrânește, o reprezintă obezitatea, pentru un câine de talia sa e foarte pofticios și mâncăcios.</p>
<p id="p">Are nevoie de multă mișcare și exerciții, este vioi, energic, alert. Poate fi crescut într-un apartament, dar cu condiția unui program bogat și variat de mișcare oferit zilnic. Latră mult, ideal este să fie crescut într-o casă cu o curte largă, împrejmuită. Se lasă dus de instincte și pleacă după miros, trebuie supravegheat îndeaproape.</p> 

</body>
</html>