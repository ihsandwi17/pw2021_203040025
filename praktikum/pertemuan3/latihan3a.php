<?php
/*
// Nama : Nur Ihsan Dwi 
// Nrp : 203040025
// Shift : Rabu 9.00 - 10.00
//Tugas : Tugas 3 Praktikum Pemrograman Web
*/
?>

<?php
$kata = ["ada", "abel", "men", "pung", "nilai"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <style>
        .kotak {
           font-family: arial;
           border: 1px solid black;
           padding: 10px;
           padding-bottom: 30px;
           margin-right: 68%;
        }
        .clear { clear: both;}
    </style>
</head>
<body>

<?php for( $i = 1; $i <= 1 ; $i++  ) { ?>
    <div class="kotak"><?php echo "Array $kata[0]lah suatu vari$kata[1] yang dapat $kata[2]am$kata[3] banyak $kata[4] ";?></div>
<?php } ?>

</body>
</html>