<?php
class Television{
	public $name;
	public $modelno;
	function set_data($name,$modelno){
	$this->name =$name;
	$this->modelno =$modelno;
	}
	function get_data(){
		return "Name is $this->name and Model is $this->modelno ";
		//return $this->modelno;
	}
}
	$tv =new Television();
	$tv->set_data('Samsung','mod123');

echo $tv->get_data();


?>