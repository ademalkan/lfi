<!DOCTYPE html>
<html>
<head>
    <title>Local File Inclusion</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="GET" action="">
        <h3>Gitmek istediğiniz sayfa</h3>
        <input type="text" name="sayfa">
        <input type="submit" value="Git" name="">
    </form>

</body>
</html>
<?php
if (isset($_GET["sayfa"])) {
    if ($_GET["sayfa"] == "index.php") {
        include($_GET["sayfa"]);
    }
    else {
        echo "Böyle bir sayfa yok!";
    }
}
?>
