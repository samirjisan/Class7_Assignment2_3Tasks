<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'Audi.php';
        
        $Audi = new Audi();
        
        echo $Audi->EngineStatus."<br>";
        echo $Audi->bodyPart."<br>";
        echo $Audi->color."<br>";
        echo $Audi->seat."<br>";
        ?>
    </body>
</html>
