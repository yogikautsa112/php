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

        
    ?>
</body>
</html>