<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <?php 
        // Tugas 1
        echo "<h3>Ini Tugas 1</h3>";
        $k = 20;
        $o = $k + 20;
        echo $o;
        echo "<hr>";
        echo $o += 30;

        echo "<hr>";
        // Tugas 2 
        echo "<h3>Ini Tugas 2</h3>";
        $goal = 4;

        // $goal++;
        // $goal++;
        // $goal++;

        echo $goal += 3;

        echo "<hr>";
        // Tugas 3
        echo "<h3>Ini Tugas 3</h3>";
        $value = 20;

        // $value--;
        // $value--;
        // $value--;
        // $value--;

        echo $value -= 4;
        echo "<hr>";
        // Ini Tugas 4
        echo "<h3>Ini Tugas 4</h3>";
        $nilai1 = 17;
        $nilai2 = 20;
        // kurang dari
        $TOTAL = $nilai1 < $nilai2;
        echo "$nilai1 < $nilai2 = $TOTAL";
        echo "<br>";
        // Lebih dari
        $TOTAL = $nilai1 > $nilai2;
        echo "$nilai1 > $nilai2 = $TOTAL";
        // sama dengan
        echo "<br>";
        $TOTAL = $nilai1 == $nilai2;
        echo "$nilai1 == $nilai2 = $TOTAL";
        // Tidak Sama dengan
        echo "<br>";
        $TOTAL = $nilai1 != $nilai2;
        echo "$nilai1 != $nilai2 = $TOTAL";
        echo "<hr>";

        // Ini tugas 5
        echo "<h3>Ini Tugas 5</h3>";
        $nilai3 = "20";
        $nilai4 = 20;
        // Sama dengan 
        $TOTAL = $nilai3 == $nilai4;
        echo "$nilai3 == $nilai4 = $TOTAL";
        echo "<br>";
        // Sama dengan 3
        $TOTAL = $nilai3 === $nilai4;
        echo "$nilai3 === $nilai4 = $TOTAL";
        echo "<br>";
        // Tidak sama dengan
        $TOTAL = $nilai3 != $nilai4;
        echo "$nilai3 != $nilai4 = $TOTAL";
        echo "<br>";
        // Tidak sama dengan 2
        $TOTAL = $nilai3 !== $nilai4;
        echo "$nilai3 !== $nilai4 = $TOTAL";
        echo "<hr>";

        // Tugas Operator logika
        echo "<h3>Tugas Operator Logika</h3>";
        $first = true;
        $second = false;
        // AND
        $third = $first && $second;
        echo "And : $third";
        echo "<hr>";
        // OR
        $third = $first || $second;
        echo "OR : $third";
        echo "<hr>";
        // NOT
        $third = !$first;
        echo "NOT : $third";
        echo "<hr>";

        // Ternary 
        echo "<h3>Ternary: Soal 1</h3>";

        $age = 17;
        $ktp = $age >= 17;
        $jawab = $ktp ? "Buat KTP" : "Belum Bisa Buat KTP";

        echo $jawab;
        echo "<hr>";

        // 2
        echo "<h3>Ternary: Soal 2</h3>";
        $umur = 45;

        if ( $umur >= 25) {
            echo "<p>Dewasa</p>";
        } else if ( $umur >= 12) {
            echo "<p>Remaja</p>";
        } else if ( $umur >= 5){
            echo "<p>Anak-Anak</p>";
        } else {
            echo "<p>Balita</p>";
        }
        echo "<hr>";
        //Using Ternary
        $result = ($umur >= 25) ? "Dewasa" : (($umur >= 12) ? "Remaja" : (($umur >= 5) ? "Anak2" : "Balita"));
        echo "Jika kita berumur $umur maka kita termasuk $result";
        echo "<hr>";

        // No 3
        echo "<h3>Ternary: Soal 3</h3>";
        $grade = 85;

        $res = ($grade > 90) ? "grade A": (($grade > 80) ? "grade B" : (($grade > 70) ? "grade C" : "grade D"));
        echo "Nilai Kamu : $grade, dan kamu mendapatkan $res";
        echo "<hr>";

        // No 4
        echo "<h3>Ternary: Soal 4</h3>";
        $DPK = 70;
        $MTK = 87;
        $Agama = 80;

        $rata = floor($DPK + $MTK + $Agama ) / 3;

        $mean = ($rata > 90 ) ?  "Sangat Bagus": (($rata > 85) ? "Bagus" :  (($rata > 80) ? "Sangat Baik" : (($rata > 70) ? "Baik" : "Kurang")));
        echo "Nilai Rata Rata kamu adalah : $rata, artinya $mean";
        echo "<hr>";

        // No 5
        echo "<h3>Ternary: Soal 5</h3>";
        $x = 20;
        $y = 30;

        $dif = ($x === $y) ? "Nilai Sama" : (($x > $y) ? "x lebih besar dari y " : (($x < $y) ? "y lebih besar dari x" : "Tidak Ada"));
        echo "nilai x adalah $x dan nilai y adalah $y maka $dif";
    ?>
</body>
</html>