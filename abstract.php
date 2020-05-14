<?php

abstract class Mobile{
  public $name;
  public $modelno;
  public function __construct($name,$modelno){
  $this->name =$name;
  $this->modelno =$modelno;
  }
  abstract public function intro() : string;
}
class Samsung extends Mobile{
	public function intro() : string {
    return "Manufacturing Country is South Korean! <br> The name is $this->name Modelno $this->modelno! ";
  }
}
class Nokia Extends Mobile{
	public function intro() : string {
		return "Manufacturing Country is Finland ! <br> The name is $this->name Modelno $this->modelno!";
	}
}
class Lava Extends Mobile{
	public function intro() : string {
		return "Manufacturing Country is India!<br>The name is $this->name Modelno $this->modelno!";
	}
}
class Xiaomi Extends Mobile{
	public function intro() : string {
		return "Manufacturing Country is China! <br>The name is $this->name Modelno $this->modelno!";
	}
}
$samsung = new Samsung("Samsung","A");
echo $samsung->intro();
echo "<br>";
$nokia = new Nokia("Nokia","B");
echo $nokia->intro();
echo "<br>";
$lava = new Lava("Lava", "C");
echo $lava->intro();
echo "<br>";
$xiaomi = new Xiaomi("Xiaomi","D");
echo $xiaomi->intro();
?>