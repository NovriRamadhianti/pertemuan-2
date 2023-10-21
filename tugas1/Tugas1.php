<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>

<body>

    <?php
    function Prima($number)
    {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo "Pengulangan untuk Mencari kategori bilangan :";
    echo "<br>";
    for ($novri_ramadhianti = 1; $novri_ramadhianti <= 19; $novri_ramadhianti++) {
        echo "<br>";
        if ($novri_ramadhianti % 2 == 0) {
            echo "<li>Angka $novri_ramadhianti adalah bilangan genap";
        } else {
            echo "<li>Angka $novri_ramadhianti adalah bilangan ganjil";
        }

        if (Prima($novri_ramadhianti)) {
            if ($novri_ramadhianti > 10) {
                echo " dan sekaligus bilangan prima";
            } else {
                echo " sekaligus bilangan prima";
            }
        }
    }

    ?>


</body>

</html>