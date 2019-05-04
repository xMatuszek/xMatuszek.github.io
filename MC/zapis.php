<!DOCTYPE HTML>
<html lang="pl">
  <head>
  <link rel="stylesheet" href="style_zapis.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
  </head>
  <body>
    <h1>System dodawania newsów na strone:</h1>
    <form action="strona.php" method="post" enctype="multipart/form-data">

    <div class="group"><input type="text" name="tytul" required="required"><label>Tytuł</label><span class="bar"></span></div>
    
    <div class="group"><input type="text" name="data" required="required"><label>Data (np. 2018-05-09)</label><span class="bar"></div> 
    
    <div class="group"><textarea type="text" name="tresc" required="required"></textarea><label>Tresc</label><span class="bar"></div> 
    
    <div class="group"><input type="file" value="Wybierz plik" id="id_obrazka" required="required"><label class="image">Obrazek</label><br></div>
    
    <button type="submit" name="wyslij" value class="submit">WYSLIJ ZAPYTANIE</button>
    </form>

    <footer>
    <p class="reserved">© 2019 xMatusz3k Wszystkie prawa zastrzeżone.</p>
    </footer>
  </body>


</html>
