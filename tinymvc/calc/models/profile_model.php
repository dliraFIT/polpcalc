<?php 
class Page_Model extends Base_Model
{
  function get_user($name,$passhash)
  {
  	return execSql("select count(*) as cant from usuarios where usuario_user = ? and usuario_pass_hash = ?",[$name,$passhash],true)[0];
  }
  function get_body_text()
  {
    return 'Hello World.';
  }
}

?>