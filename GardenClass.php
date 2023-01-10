<?
class Garden
{
  public  $CurrAppleTree;
  public  $CurrPearTree;
  public  $Apples;
  public  $Pears;
  public  $MassApples;
  public  $MassPears;

  public function __construct($CurrAppleTree, $CurrPearTree)
  {
    $this->CurrAppleTree = $CurrAppleTree;
    $this->CurrPearTree = $CurrPearTree;
  }
  
  public function AddAppleTree($AppleTree)
  {
    $this->CurrAppleTree += $AppleTree;
  }

  public function AddPearTree($PearTree)
  {
    $this->CurrPearTree += $PearTree;
  }

  public function TakeApples()
  {
    for ($i = 1; $i <= $this->CurrAppleTree; $i++) 
    {
      $this->Apples += rand(40, 50);
    }
  }

  public function TakePears()
  {
    for ($i = 1; $i <= $this->CurrPearTree; $i++) 
    {
      $this->Pears += rand(0, 20);
    }
  }

  public function MassApples()
  {
    while ($i < $this->Apples) 
    {
      $this->MassApples += rand(150, 180);
      $i++;
    }
  }

  public function MassPears()
  {
    while ($i < $this->Pears) 
    {
      $this->MassPears += rand(130, 170);
      $i++;  
    }
  }

}



?>