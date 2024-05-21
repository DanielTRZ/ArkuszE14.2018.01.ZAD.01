<!DOCTYPE html>
<html lang="pl">
<head>
<title>Portal ogloszeń</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styl1.css">
</head>
    
<body>
<div id="banner">
<h1>Portal Ogłoszeniowy</h1>       
</div>
<div id="panell">
<h2>Kategorie ogłoszeń</h2>
<ol>
<li>Kisążki</li>
<li>Muzyka</li>
<li>Filmy</li>
<img src="ksiazki.jpg" alt="Kupię / sprzedam książke">
<table>
<tr>
<th>Liczba ogłoszeń</th>
<th>Cena ogłoszeń</th>
<th>Bonus</th>      
</tr>
<tr>
<th>1-10</th>
<th>1PLN</th>
<th rowspan="3">Subskrypcja newslettera to upust 0.20 PLN na ogłoszenie</th>     
</tr>
<tr>
<th>11-50</th>
<th>0,80 PLN</th>  
</tr>
<tr>
<th>51 i więcej</th>
<th>0,60 PLN</th> 
</tr>
</table>   
</ol> 
</div>
    <div id="panelp">
    <h2>Ogłoszenia kategorii ksiązki</h2>
          
    <?php
        
  $serwer = 'localhost';
  $login = 'root';
  $haslo = '';
  $baza ='ogloszenia';
        $do_bazy = mysqli_connect($serwer,$login,$haslo,$baza);
        if(mysqli_connect_errno())
        {echo"wystapil blad polacxzenia z baza";}
        $wynik=mysqli_query($do_bazy," SELECT `id`,`tytul`,`tresc` FROM `ogloszenie` WHERE kategoria = '1' ");
        while($row=mysqli_fetch_array($wynik))
        {    
            echo "<h3>";
            echo "<ul>";
            echo $row['id'].$row['tytul']."<br>";
            echo "</ul>";
            echo "</h3>";
            echo "<a>";
            echo $row['tresc']."<br>";
            echo "</a>";
            
        }
        $wynik2=mysqli_query($do_bazy," SELECT `telefon`FROM `uzytkownik`");
        while($row=mysqli_fetch_array($wynik))
          {  
            echo $row['telefon'].$row['uzytkownik'];"<br>";
        }
         mysqli_close($do_bazy);
       
        ?>
    </div>
    <div id="stopka">
    <p>Portal ogłoszeniowy opracował: DANIEL</p>
      </div>
    </body>
</html>
