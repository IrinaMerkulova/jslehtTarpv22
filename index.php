<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Js tööde Irina leht</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="js/joonisScript.js"></script>
</head>
<body>
<!--sisu header.php failist-->
<?php
    include('header.php');
?>
<!--sisu nav.php failist-->
<?php
    include('nav.php');
?>
<!--sisu content kaustast-->
<?php
if(isset($_GET["veebileht"])){
    include('content/'.$_GET["veebileht"]);
} else {
     echo "Tere, siin sa leiad minu Javascript tööd, kui sa clickid menüü peale";
}

?>
<!--sisu footer.php failist-->
<?php
    include('footer.php');
?>
</body>
</html