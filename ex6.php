<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="aa.css">
</head>
<body>
    <div class="dib">

<form action="" method="POST">
<input type="text" name="HT" placeholder="Entrez HT"><br><br>
<input type="text" name="TTVA" placeholder=" Entrez TTVA"><br><br>
<input type="submit" name="btn" value="Operation">
</form>

<?php

if(isset($_POST['HT']) && isset($_POST['TTVA'])){
   $ht = $_POST['HT'];
   $ttva = $_POST['TTVA'];
   $tva = $ht*($ttva/100);
   $ttc = $ht+$tva;
   echo "TVA egal ".$tva; 
    echo "TTC egal:".$ttc;
}

?>
</div>
</body>
</html>
