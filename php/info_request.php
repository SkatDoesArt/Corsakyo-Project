
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TD1</title>
    <link rel="icon" type="image/png" href="../assets/icons/favicon.png" />
    <!--
    <link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico" />
    <link rel="icon" type="image/png" href="assets/icons/favicon.png" /> -->
</head>
<body>
<p>

<hr>
<h1> Entête HTTP </h1>
<hr>
<?php
foreach (getallheaders() as $name => $value) {
    echo "$name: $value <br>";
}

?>
</p>
<?php
$requestType = $_SERVER['REQUEST_METHOD'];
?>
<p>
<hr>
<h1> Méthode :  <?php echo $requestType;?> </h1>
<hr>
<?php
$s = '_'.$requestType;
$data = ${$s};
foreach ($data as $name => $value) {
    echo "$name: ";
    print_r($value);
    echo "<br>";
}

?>
</p>

</body>
</html>
