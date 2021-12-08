<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->



<html>
 
<?php 
   $server = "localhost";
   $user = "root";
   $pass = "";
   $dbname = "terrarium";

   $db = new mysqli($server, $user, $pass, $dbname);
   if($db->connect_error)
   {
     die("Verbindung fehlgeschlagen: " . $db->connect_error);
   }
?>
   

  <head>
        <title>Terrarium</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS_V0.1.css">
 </head>  
 <body>
    <div id="content" class="page">
    <header>
        <div class="header">
            <h1>Terrariumsteuerung</h1>
        </div> 
    </header>
     <main class="wrapper">
         <div class="element1 grid-box">Über uns</div>
         
         <div class="element2 grid-box">Temperatur
           <br>
              <a href="temperatur.php">
              <div class="queue">
                <?php                 
                    $sql = "SELECT Wert FROM temperatur";
                    $result = $db->query($sql);
                    
                    $row = $result -> fetch_array(MYSQLI_NUM);
                    printf("%sC°\n", $row[0],);
                ?> 
              </div>
              </a>
          </div>  
      <div class="element3 grid-box">Feuchtigkeit      
        <br>
        <div class="queue">
                <?php                 
                    $sql = "SELECT Wert FROM feuchtigkeit";
                    $result = $db->query($sql);
                    
                    $row = $result -> fetch_array(MYSQLI_NUM);
                    printf("%s", $row[0],);
                    echo "%";
                ?> 
              </div>     
      </div>
      <div class="element4 grid-box">Licht</div>
      <div class="element5 grid-box">Kamera</div>
      <div class="element6 grid-box">Sonstiges</div>
   </main>
   </div>
 </body>
    
</html>