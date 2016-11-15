<?php
class Blog_modle extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function set_temp()
	{
		$temp = $_GET['temp'];
		$huma = $_GET['huma'];
		$data = array (
				'temp' => $temp,
				'huma' => $huma
		);
		$this->db->insert('temperature',$data);
		
	}
	public function led1_on()
	{
		$data = array (
				'treadmill' => 'treadmill1',
				'temp' => 2,
				'huma' => 1234
		);
		$this->db->insert('temperature',$data);
	}
	public function led1_off()
	{
		$data = array (
				'treadmill' => 'treadmill1',
				'temp' => 1,
				'huma' => 1234
		);
		$this->db->insert('temperature',$data);
	}
	public function led2_on()
	{
		$data = array (
				'treadmill' => 'treadmill2',
				'temp' => 2,
				'huma' => 1234
		);
		$this->db->insert('temperature',$data);
	}
	public function led2_off()
	{
		$data = array (
				'treadmill' => 'treadmill2',
				'temp' => 1,
				'huma' => 1234
		);
		$this->db->insert('temperature',$data);
	}
	public function motor1_on()
	{
		$dCommand = 1;
		
	}
	public function motor2_on()
	{
		$data = array (
				'treadmill' => 'treadmill2',
				'temp' => 1,
				'huma' => 1234
		);
		$this->db->insert('temperature',$data);
	}
	public function motor_stop()
	{
		
	}
	public function motor_controller()
	{
		$mName = $this->input->post('sort');
		$dCommand = $this->input->post('command');
		if($dCommand == 'op')
		{
			$data = array(
				'dCommand' => $this->input->post('command'),
				'dTreadmillStatus' => 'Empty'
			);
			$this->db->where('mName',$mName);
			$this->db->update('Machine',$data);
			$this->db->where('mName',$mName);
			$this->db->update('Machine_Dynamic_Info',$data);
		}
		else
		{
			$data = array(
				'dCommand' => $this->input->post('command'),
				'dTreadmillStatus' => 'Busy'
			);
			$this->db->where('mName',$mName);
			$this->db->update('Machine',$data);
			$this->db->where('mName',$mName);
			$this->db->update('Machine_Dynamic_Info',$data);
		}
		
	}
	public function get_machine_columns()
	{
		$sql = "SELECT mName FROM `Machine`";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	
	
	public function check_login()
	{
		$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
		$sql = "SELECT * FROM `member` WHERE username = ? and password = ?";
		$query = $this->db->query($sql,$data);
		
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$username = $row->username;
				$level = $row->level;
				$_SESSION['level'] = $row->level;
				$this->session->mark_as_temp('level',10);
			}
			// if(isset($_SESSION['level']))
			// {
			// 	echo $_SESSION['level']."</br>";
			// }
			// echo $username."-------".$level;
		}
		else
		{
			echo "<script>alert('輸入的帳號或密碼錯誤');</script>";
		}
	}
}