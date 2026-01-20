<?php include 'kalkulasi.php'; ?>
<html>
    <head>
        <title>Konversi Suhu</title>
    </head>
    <body>
        <h1>Celcius = <span><?= celcius(); ?></span></h1>
        <h1>Farenheit = <span><?= farenheit(); ?></span></h1>
        <h1>Kelvin = <span><?= kelvin(); ?></span></h1>
        <h1>Reamur = <span><?= reamur(); ?></span></h1>


        <form action="" method="get">
            <label>Celcius</label>
            <input type="number" name="celcius">
            <input type="submit" name="dor" value="Hitung_C">
            <br>
            <label>Farenheit</label>
            <input type="number" name="Farenheit">
            <input type="submit" name="dor" value="Hitung_F">
            <br>
            <label>Kelvin</label>
            <input type="number" name="kelvin">
            <input type="submit" name="dor" value="Hitung_K">
            <br>
            <label>Reamur</label>
            <input type="number" name="reamur">
            <input type="submit" name="dor" value="Hitung_R">
            <br>
        </form>
    
    </body>
</html>