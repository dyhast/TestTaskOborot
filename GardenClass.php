<?
abstract class trees 
{
  public  $CurrTrees;
  public  $Fruits;
  public  $Mass;

  public $ConnectToDB;

  abstract protected function AddTrees($trees);
  abstract protected function TakeFruits();
  abstract protected function SummMass();


}

class Apples extends trees
{
  public function __construct()
  {
    $this->ConnectToDB = new PDO("mysql:host=localhost;dbname=Garden_DB", "root", "");
    $SelectTrees = 'SELECT ID FROM Trees WHERE Tree_Type = :Apple';
    $CurrTree = $this->ConnectToDB->prepare($SelectTrees);
    $CurrTree->execute(['Apple' => 'Apple']);
    $CurrTree = count($CurrTree->fetchAll());
    $this->CurrTrees = $CurrTree;
  }

  public function AddTrees($trees)
  {
    $InsertTrees = 'INSERT INTO Trees (Tree_Type) VALUES (:Tree_Type)';
    $CurrTree = $this->ConnectToDB->prepare($InsertTrees);
    for ($i=0; $i < $trees; $i++) 
    { 
      $CurrTree->execute(['Tree_Type' => 'Apple']);
    }
    $this->CurrTrees += $trees;
  }

  public function TakeFruits()
  {
    for ($i = 1; $i <= $this->CurrTrees; $i++) 
    {
      $this->Fruits += rand(40, 50);
    }
  }

  public function SummMass()
  {
    if ($this->Fruits==0)
    {
      $this->TakeFruits();
    }
    while ($i < $this->Fruits) 
    {
      $this->Mass += rand(150, 180);
      $i++;
    }
  }
}

  class Pears extends trees
{
  public function __construct()
  {
    $this->ConnectToDB = new PDO("mysql:host=localhost;dbname=Garden_DB", "root", "");
    $SelectTrees = 'SELECT ID FROM Trees WHERE Tree_Type = :Pear';
    $CurrTree = $this->ConnectToDB->prepare($SelectTrees);
    $CurrTree->execute(['Pear' => 'Pear']);
    $CurrTree = count($CurrTree->fetchAll());
    $this->CurrTrees = $CurrTree;
  }

  public function AddTrees($trees)
  {
    $InsertTrees = 'INSERT INTO Trees (Tree_Type) VALUES (:Tree_Type)';
    $CurrTree = $this->ConnectToDB->prepare($InsertTrees);
    for ($i=0; $i < $trees; $i++) 
    { 
      $CurrTree->execute(['Tree_Type' => 'Pear']);
    }
    $this->CurrTrees += $trees;
  }

  public function TakeFruits()
  {
    for ($i = 1; $i <= $this->CurrTrees; $i++) 
    {
      $this->Fruits += rand(0, 20);
    }
  }

  public function SummMass()
  {
    if ($this->Fruits==0)
    {
      $this->TakeFruits();
    }
    while ($i < $this->Fruits) 
    {
      $this->Mass += rand(130, 170);
      $i++;
    }
  }


}
?>