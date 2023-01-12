<?

abstract class trees 
{
  public  $CurrTrees;
  public  $Fruits;
  public  $Mass;

  abstract protected function AddTrees($trees);
  abstract protected function TakeFruits();
  abstract protected function SummMass();
}

class Apples extends trees
{

  public function __construct($CurrAppleTree)
  {
    $this->CurrTrees = $CurrAppleTree;
  }

  public function AddTrees($trees)
  {
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

  public function __construct($CurrTrees)
  {
    $this->CurrTrees = $CurrTrees;
  }

  public function AddTrees($trees)
  {
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