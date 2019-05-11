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
        include 'MyName.php';
        
        $fName = new FullName();
        $mName = new MyName();
        
        $mName-> printName();
        $fName-> printName();
        
        ?>
    </body>
</html>
