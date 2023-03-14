<?
require_once 'GardenClass.php';

$AddAppleTree = 10;
$AddPearTree = 15;


$ObjApples = new Apples($ConnectToDB);
$ObjPears = new Pears($ConnectToDB);

$ObjApples->AddTrees($AddAppleTree);
$ObjApples->SummMass();

$ObjPears->AddTrees($AddPearTree);
$ObjPears->SummMass();


echo 'Яблок собрано: '.$ObjApples->Fruits.' с '.$ObjApples->CurrTrees.' деревьев, общей массой: '.$ObjApples->Mass.'<br>';
echo 'Груш собрано: '.$ObjPears->Fruits.' с '.$ObjPears->CurrTrees.' деревьев, общей массой: '.$ObjPears->Mass.'<br>';



?>