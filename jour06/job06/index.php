<html>
<style>
    .style {
    display: flex;
    flex-direction: column;
    align-items: center;
    }
</style>

<?php 
$style ="style1.css";

if($_GET==true) {
    switch($_GET["style"]) {
        case 'Vert':
        $style="style1.css";
        break;
        case 'Rouge':
        $style="style2.css";
        break;
        case 'Violet':
        $style="style3.css";
        break;
    }
}
?>

<head>
<link rel="stylesheet" type="text/css" href=<?php echo $style; ?> >
</head>

<body>
<form class="style" action="./index.php" method="get">
    <label for="css">Choisir votre style :<br><br></label>
<select id="css" name="style">
    <option value="Vert">Style1</option>
    <option value="Rouge">Style2</option>
    <option value="Violet">Style3</option>
    </select> 
    <br><br>
    <input type="submit" value="Envoie">
</form>
</body>



</html>