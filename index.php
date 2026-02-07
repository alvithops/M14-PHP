<!DOCTYPE HTML>
<html>
     <head>
    <title>OOP PHP</title>
    </head>
    <body>
        <?php
        if(isset($_GET['r'])){
            $r = $_GET['r'];
            if($r == "persegi"){
                require_once 'persegi/formpersegi.php';
            }
        } else {}
    </body>
</html>