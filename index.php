<?php include 'kalkulasi.php'; ?>
<html>
    <head>
        <title>Konversi Suhu</title>
    </head>
    <body>
        <h1>Celcius = <span><?= isset($_GET['dor']) ? celcius() : '' ?></span></h1>
        <h1>Farenheit = <span><?= isset($_GET['dor']) ? farenheit() : '' ?></span></h1>
        <h1>Kelvin = <span><?= isset($_GET['dor']) ? kelvin() : '' ?></span></h1>
        <h1>Reamur = <span><?= isset($_GET['dor']) ? reamur() : '' ?></span></h1>

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
        <a href=index.php>
            <button>Bersihkan</button>
        </a>

    
    </body>
</html>
