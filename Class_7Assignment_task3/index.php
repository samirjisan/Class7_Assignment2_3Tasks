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
        include 'Connection.php';

        $conn = new Connection();

        $conn ->insertMobiles("Nokia", "3310", "10000tk");
?>
    </body>
</html>
