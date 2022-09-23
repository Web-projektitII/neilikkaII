<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        $path = pathinfo($_SERVER['SCRIPT_NAME']);    
        $sivu = ucfirst($path["filename"]); 
        echo $sivu;
        ?>
    </title>
</head>
<body>
<?php
/* Neilikan aloitussivu 12.9.2022 */
include ("navigation.html");
include ("debuggeri.php");
?>

<div><h1>ETUSIVU</h1></div>

<?php
foreach ($_SERVER AS $key => $value){
echo "$key:$value<br>";    
}
echo basename($_SERVER['REQUEST_URI'])."<br>";
echo basename($_SERVER['PHP_SELF'])."<br>";

$valuutat = $_REQUEST['valuutat'];
$valuutat = isset($_POST['valuutat']) ? 
    $_POST['valuutat'] : 
    "";
//$valuutat = $_POST['valuutat'] ?: 'oletus';
$valuutat = $_POST['valuutat'] ?? '';

echo "Rekisterinumero: {$rivi['rekisterinro']} - Merkki: {$rivi['merkki']} - Väri: {$rivi['vari']}<br>";

echo "Valuutat:$valuutat<br>";   

try {
    $query = "DELETE FROM tableName WHERE ID=1";
    $success = $db->query($query);                         

    if(!$success) {
        $error = "You cannot delete this row";
        throw new Exception($error);
    }      
} catch (Exception $e) {
    echo $e->getMessage();
}



$vakio = 25;
function summaErotus($luku1, $luku2) {
    $vakio = $GLOBALS['vakio'];
    $summa = $luku1 + $luku2 + $vakio;
    $erotus = $luku1 - $luku2 - $vakio;
    return array($summa,$erotus);
 }

list($summa,$erotus) = summaErotus(10,8);
echo "Summa:$summa,erotus:$erotus<br>";

$a = false;
$b = [];
$c = $a !== $b;
echo "c:$c<br>";

echo '<h1>$_SERVER-muuttujat:</h1><br>';
foreach ($SERVER AS $key => $value){
    echo "$key:$value<br>";
    };

?>

<?php
include ("footer.html");
?>
</body>
</html>



