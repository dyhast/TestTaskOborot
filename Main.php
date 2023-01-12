<?
require_once 'GardenClass.php';


$current = file_get_contents('garden.txt');
$current = explode(' ',$current);
$CurrAppleTree = $current[0];
$CurrPearTree = $current[1];

$AppleTree = 10;
$PearTree = 15;


$ObjApples = new Apples($CurrAppleTree);
$ObjPears = new Pears($CurrPearTree);

$ObjApples->AddTrees($AppleTree);
$ObjApples->SummMass();
$ObjPears->AddTrees($PearTree);
$ObjPears->SummMass();


echo 'Яблок собрано: '.$ObjApples->Fruits.' с '.$ObjApples->CurrTrees.' деревьев, общей массой: '.$ObjApples->Mass.'<br>';
echo 'Груш собрано: '.$ObjPears->Fruits.' с '.$ObjPears->CurrTrees.' деревьев, общей массой: '.$ObjPears->Mass.'<br>';


file_put_contents('garden.txt', $ObjApples->CurrTrees.' '.$ObjPears->CurrTrees);

?>