<?php 
// Nama : Nur Ihsan Dwi 
// Nrp : 203040025
// Shift : Rabu 9.00 - 10.00
?>



<?php
    function tumpukanBola($tumpukan){
        for ($i =1; $i <= $tumpukan; $i++){
            for ($j = 1; $j <= $i; $j++){
                echo "<div class = 'bola'>" . $i . "</div>";
        }
        echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
        .bola{
            border-radius: 50%;
            background-color: salmon;
            height: 50px;
            display: inline-block;
            margin: 2px;
            width: 50px;
            line-height: 50px;
            border: 1px solid black;
            text-align: center;
        }

        .line{
            border: 2px solid black;
            padding: 15px;
            width: 300px;
        }
    </style>
</head>
<body>

        <div class="line">
            <?php echo tumpukanBola(5); ?>
        </div>

</body>
</html> 