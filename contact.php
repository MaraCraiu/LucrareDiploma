<!DOCTYPE html>
<html>
<head>
<title>Wikipedia Cainilor</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="topnav">
<a href="acasa.php" class="button">Acasa</a>
<a href="anatomie.php" class="button">Anatomie</a>
<a href="rase.php" class="button">Rase</a>
<a href="contact.php" class="button active">Contact</a>
<input type="text" placeholder="Search..">
</div>
<div class="container">
              <h1>Spune-ne ce gândeşti!</h1>
                <form method="POST" action="contact.inc.php">
           <input type="text" name="username" placeholder="username">
                    <input type="text" name="email" placeholder="email"><br>
                    <textarea style="text-indent: 5px; font-family: timesnewroman; margin-bottom: 20px;" 
                              name="parere" rows="10" cols="41" max="1000" placeholder="Părerea ta..."></textarea><br>
                    <input id="submit" type="submit" value="Trimite"><br>    
                 </form>
</div>
<?php  
  if(isset($_GET['info']) && $_GET['info'] == 'OK') {
    echo '<p style="text-align: center; color: green; font-size: 20px;">Mulţumim pentru timpul acordat!</p>';
  } elseif (isset($_GET['info']) && $_GET['info'] == 'error') {
    echo '<p style="text-align: center; color: red; font-size: 20px;">Completaţi câmpul!</p>';
 }
?>
</body>
</html>