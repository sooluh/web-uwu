<!DOCTYPE html>
<html>

<body>
    <?php
    function tambah($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . tambah(5, 10) . "<br/>";
    echo "7 + 13 = " . tambah(7, 13) . "<br/>";
    echo "2 + 4 = " . tambah(2, 4);
    ?>
</body>

</html>