<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ipsam. Labore libero amet quae pariatur in similique placeat sint nulla aut repudiandae ut doloremque, officia architecto quisquam est numquam eaque.";
    
    $rep = $_GET["word"];
     
    echo $text . ' ------ ' . 'la sua lunghezza è di' . strlen($text) . ' caratteri ' ;
    ?>
    <br>
    <hr>
    <br>
    <?php 
    echo 'hai censurato: ' . $rep ?>
    <br>
    <hr>
    <br>
    <?php 
    $cens1 = str_replace( ucwords($rep) ,'*****',$text );
    $definitivo = str_replace( $rep ,'*****',$cens1);

    echo 'nuovo testo censurato: ' . $definitivo ; ?>

</body>
</html>