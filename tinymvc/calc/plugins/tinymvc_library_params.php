<?php
class TinyMVC_Library_Params implements ArrayAccess
{
	public $params = array();
	function __construct() {
		$this->params = array_merge($_GET, $_POST);
	}
	public function offsetExists($offset){
		return isset($this->params[$offset]);
	}
	public function offsetGet($offset){
		return $this->params[$offset];
	}
	public function offsetSet($offset, $value){
		$this->params[$offset]=$value;
	}
	public function offsetUnset($offset){
		unset($this->params[$offset]);
	}
}
?>