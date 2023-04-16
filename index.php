<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    //Tên hàm phải bắt đầu bằng một chữ cái hoặc dấu gạch dưới. Tên hàm KHÔNG phân biệt chữ hoa chữ thường.
    //Them kai bao strict dua ra loi neu loai du lieu khong khop
    //declare(strict_types=1);
    function addNumber(float $a, float $b): int
    {
        return (int)($a + $b);
    }
    echo addNumber(5.5, 5.2);

    //Passing Arguments by Reference: cac thay doi doi voi doi saao cung lam thay doi bien dc truyen vao
    function add_five(&$value)
    {
        $value += 5;
    }
    $num = 2;
    add_five($num);
    echo $num;

    //Array
    $cars = array("Volvo", "BMW", "Toyota");
    $length =  count($cars);
    for ($i = 0; $i < $length; $i++) {
        echo $cars[$i];
        echo "<br>";
    }
    //associative array: mang ket hop
    $age = array("Perter" => "35", "Ben" => "37");
    echo "Peter is " . $age['Perter'] . " years old.";
    echo asort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    //Multidimensional arrays
    $carss = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    echo $carss[0][0] . ": In stock: " . $carss[0][1] . ", sold: " . $carss[0][2];
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $carss[$row][$col] . "</li>";
        }
        echo "</ul>";
        echo "nghia";
    }
    ?>
</body>

</html>