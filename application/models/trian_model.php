<?php defined('BASEPATH') or exit('No direct script access allowed');
class Trian_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Trian_model','trian');
	}

	function inserttrian($data1,$data2,$data3,$data4)
	{
	
		$this->db->insert('procession', $data1);
		$this->db->insert('start', $data2);
        $this->db->insert('huayrach', $data3);
        $this->db->insert('end', $data4);
	}

	function showtrian()
	{
		$this->db->select('*');
		$this->db->from('procession');
		$this->db->join('start','start.id = procession.id');
        $this->db->join('huayrach','huayrach.id = procession.id');
		$this->db->join('end','end.id = procession.id');
		$this->db->like('procession.name_pro', 'รถด่วน');
	
		$result = $this->db->get();
		return $result;
	}

}
