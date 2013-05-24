<?php
class Jobs_model extends CI_Model {
	//const var TABLE = "user";
	public function __construct()
	{
		parent::CI_Model();
		
	}
	
	function getAll(){
	$query=$this->db->query("SELECT * FROM test");
		return $query->result();
		}
	
	/* public function getUserById($id) {
		$query = $this->db->get_where(TABLE, array("id"=>$id));
		return $query->row_array();
	} */
	
	function insert1($data){
	
	$this->db->insert("test" $data);
	
	}
	
	/*function insert2($data){
	$this->db->insert_batch("test", $data);
	}*/
	
	
}