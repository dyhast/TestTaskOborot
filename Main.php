<?
require_once 'GardenClass.php';


$current = file_get_contents('garden.txt');
$current = explode(' ',$current);
$CurrAppleTree = $current[0];
$CurrPearTree = $current[1];

$AppleTree = 10;
$PearTree = 15;

echo $ObjGarden;

$ObjGarden = new Garden($CurrAppleTree, $CurrPearTree);


$ObjGarden->AddPearTree($PearTree);
$ObjGarden->AddAppleTree($AppleTree);
$ObjGarden->TakePears();
$ObjGarden->TakeApples();

echo 'Яблок собрано: '.$ObjGarden->Apples.' с '.$ObjGarden->CurrAppleTree.' деревьев, общей массой: '.$ObjGarden->MassApples.'<br>';
echo 'Яблок собрано: '.$ObjGarden->Pears.' с '.$ObjGarden->CurrPearTree.' деревьев, общей массой: '.$ObjGarden->MassPears.'<br>';


file_put_contents('garden.txt', $ObjGarden->CurrAppleTree.' '.$ObjGarden->CurrPearTree);

?>