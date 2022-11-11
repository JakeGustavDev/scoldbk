<?php
class login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    

	function  findUser($cu, $cc) {
		$data = array();
		$sql = "
			select 
				* 
			from 
				login
			where 
				id = '".$cu."'  and password = '".md5($cc)."'
				";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
	}
}
?>