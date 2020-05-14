<?php
class Fruit{
	public $name;
	public $color;
	function __construct($name,$color){
		$this->name = $name;
		$this->color = $color;	
	}
	public function intro(){
		echo "Yes";
		echo "<br>";
		echo "The Fruit name is {$this->name} and Its color is {$this->color}.";
	}
}
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
	echo"<br>";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>

