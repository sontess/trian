<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('Trian_model','trian');

	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function insert() {
	$data1 = array(
				'num_pro' => $this->input->post("num_pro"),
				'name_pro' => $this->input->post("name_pro")
				
			);

			// $result1 = $this->db->insert('user', $data1);

			$data2 = array(
				'station_st' => $this->input->post("station_st"),
				'time_st' => $this->input->post("time_st")
				
			);

			// $result2 = $this->db->insert('address', $data2);

			$data3 = array(
				'in_huay' => $this->input->post("in_huay"),
				'out_huay' => $this->input->post("out_huay")
				
			);

			$data4 = array(
				'station_en' => $this->input->post("station_en"),
				'time_en' => $this->input->post("time_en")
				
			);

			
			$this->trian->inserttrian($data1,$data2,$data3,$data4);
			redirect('contro/index');
		}

		public function datatrian()
			{
				$uid['proession'] = $this->trian->showtrian();
				$this->load->view('show', $uid);
			}
}
