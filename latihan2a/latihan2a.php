<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr> 
            <th>kolom 1</th>
            <th>kolom 2</th>
            <th>kolom 3</th>
            <th>kolom 4</th>
            <th>kolom 5</th>
        <?php
        $jumlah_baris = 15;
        $jumlah_kolom = 5;

        for ($i = 1; $i <= $jumlah_baris; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $jumlah_kolom; $j++) {
                echo "<td>Baris $i, Kolom $j</td>";
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>