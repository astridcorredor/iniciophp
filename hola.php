<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="" method="post">
<label for="nom1">Digite su primer numero</label>
<input type="text" name="nom1" id="nom1">
<br>
<label for="nom2">Digite su Segundo numero</label>
<input type="text" name="nom2" id="nom2">
<br>
<input type="submit" value="Calcular">
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom1 = $_POST['nom1'];
$nom2 = $_POST['nom2'];
$suma = $nom1 + $nom2;
echo '<label for="">El resultado de la suma es</label>';
echo '<input type="text" name="" id="" value="' . $suma . '">';
echo "<br>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom1 = $_POST['nom1'];
$nom2 = $_POST['nom2'];
$resta = $nom1 - $nom2;
echo '<label for="">El resultado de la resta es</label>';
echo '<input type="text" name="" id="" value="' . $resta . '">';
echo "<br>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom1 = $_POST['nom1'];
$nom2 = $_POST['nom2'];
$multiplicacion = $nom1 * $nom2;
echo '<label for="">El resultado de la multiplicación es</label>';
echo '<input type="text" name="" id="" value="' . $multiplicacion . '">';
echo "<br>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom1 = $_POST['nom1'];
$nom2 = $_POST['nom2'];
$division = $nom1 / $nom2;
echo '<label for="">El resultado de la división es</label>';
echo '<input type="text" name="" id="" value="' . $division . '">';
echo "<br>";
}
?>

</form>
</body>
</html>
</body>
</html>

