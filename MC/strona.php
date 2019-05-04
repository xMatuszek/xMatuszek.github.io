<?php

$polaczenie = mysqli_connect("localhost", "root", "", "news");

//if($polaczenie) echo "Połączenie istnieje";
//else echo "Połączenie nie powiodło się";

if(isset($_POST['wyslij']))
{
    $tyt = $_POST['tytul'];
    $dat = $_POST['data'];
    $tre = $_POST['tresc'];

    //echo $tyt;
    $zapyt="INSERT INTO tb_news(tytul, data, tresc)
            VALUES('$tyt','$dat','$tre')";
    
    mysqli_query($polaczenie, $zapyt);
}

$zapyt2="SELECT * FROM tb_news 
        ORDER BY data DESC" ;

$wynik=mysqli_query($polaczenie, $zapyt2);


while($wiersz=mysqli_fetch_array($wynik))
{
?>
    <img src="">
    <div class="container-news">
        <div class="news">
            <div class="news-photo"></div>
            <div class="contents">
                <h6><?php echo $wiersz['data'] ?></h6>
                <h1><?php echo $wiersz['tytul'] ?></h1>
                <p><?php echo $wiersz['tresc'] ?></p>
            </div>
        </div>
    </div>
    <hr>


    <!--echo "obrazek<br>";
    echo $wiersz['data']."<br>";
    echo "<h3>".$wiersz['tytul']."</h3>";
    echo "<p>".$wiersz['tresc']."</p>";
    echo "<br>";-->

<?php
}
?>
