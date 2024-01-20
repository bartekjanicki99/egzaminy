
<!DOCTYPE html>
<html lang="pl-PL">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="stronaglowna2.css">
<title>Galeria</title>
</head>
<body>
<header>
<section class="menu">
<img src="obraz1.png" alt="tu powinno byc logo" id="obraz1">
<a href="wyszukiwarka.php">Wyszukaj dane auto po marce</a>
<a href="logowanie.php">Dodaj swoją aukcje</a>
<a href="kontakt.html">Kontakt</a>
<a href="stronaglowna.php">Wróć na stronę główną</a>
</section>
</header>
<main>
<h2>Galeria</h2>
<ul class="galeria">
<li class="foty"><img src="mercedes.png" name="auta"></li>
<li class="foty"><img src="bmw.png" name="auta"></li>
<li class="foty"><img src="tlo2.jpg" name="auta"></li>
<li class="foty"><img src="audi.png" name="auta"></li>
</ul>
<script>
zdj=document.getElementsByName('auta');
table=['mercedes.png','bmw.png','tlo2.jpg','audi.png']

zdj[0].src="mercedes.png";
zdj[1].src="bmw.png";
zdj[2].src="tlo2.jpg";
zdj[3].src="audi.png";
pom=0
setInterval(function()
{
for (let i=0;i<4;i++)
{
    zdj[i].src=table[(i+pom)%4]
}
pom++
},3000);

</script>
</main>
<footer>
<h4>Stronę wykonał: Bartłomiej Janicki 5Ti</h4>

</footer>
</body>

</html>