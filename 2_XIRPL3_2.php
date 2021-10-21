<!DOCTYPE html>
<head>
    <title>Belajar PHP - 2</title>
</head>
<body>
    <h2>Perulangan</h2>
<?php
echo date("d-m-Y H:i:s") .  "<br>";
for ($i = 0; $i < 6; $i++)
{
    for ($j = $i; $j < 6; $j++)
    {
        echo " * ";
    }
    echo "<br />";
}
?>
</body>
</html>