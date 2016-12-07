<?php
class Base_Model extends TinyMVC_Model
{
	public function execSql($query,$Args,$returnFlag = false,$debug = false){
		try {
			$this->db->query($query,$Args);
			if ($returnFlag) {
				$results = array();
				while($row = $db->next())
				{
					$item = new stdClass;
					foreach ($row as $key=> $value)
						$item->$key = $value;
					$results[] = $item;
				}
			} else {
				$results = true;
			}
		} catch (Exception $e) {
			if($debug)
				print_r($e);
			if ($returnFlag) {
				$results = array();
			} else {
				$results = false;
			}
		}
		return $results;
	}
}
?>	