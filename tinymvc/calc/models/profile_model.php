<?php 
class Profile_Model extends Base_Model
{
  function get_login_info($name,$passhash)
  {
  	return parent::execSql("select usuario_user,usuario_pass_hash from usuarios where usuario_user = ? and usuario_pass_hash = ?",[$name,$passhash],true)[0];
  }
  function get_user($name)
  {
  	try {
		return parent::execSql("select A.*,'ok' as estado from usuarios A where A.usuario_user = ?",[$name],true);
  	} catch (Exception $e) {
  		return array();
  	}
  }
  function get_body_text()
  {
    return 'Hello World.';
  }
}

?>