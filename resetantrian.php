<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $konek = mysqli_connect("localhost","root","", "antrian");
    $reset = mysqli_query($konek, "TRUNCATE table tabelantrian");
    $reset = mysqli_query($konek, "TRUNCATE table tabeltampil");

    if ($reset)
    {
        echo "<script>alert('Antrian berasil direset!');</script>";
        echo "<script>window.location='index.php'</script>";
    }
?>

</body>
</html>