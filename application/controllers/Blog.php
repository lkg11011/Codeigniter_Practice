<?php
class Blog extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('blog_modle');
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index() {
		//echo 'Hello World!';
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
		$data['title'] = "Hello Abner!";
		$data['heading'] = "My Real Heading";
		$this->load->helper('url');
		$this->load->view('blogview',$data);
	}
	public function comments() {
		echo "Look at this!";
	}
	
	public function shoes() 
	{
		$this->blog_modle->set_temp();
		$this->load->view('shoes_success');
	}
	public function led1_on()
	{
		$this->blog_modle->led1_on();
		redirect('index.php/blog/control_led','refresh');
	}
	public function led1_off()
	{
		$this->blog_modle->led1_off();
		redirect('index.php/blog/control_led','refresh');
	}
	public function led2_on()
	{
		$this->blog_modle->led2_on();
		redirect('index.php/blog/control_led','refresh');
	}
	public function led2_off()
	{
		$this->blog_modle->led2_off();
		redirect('index.php/blog/control_led','refresh');
	}
	public function control_led()
	{
		$data['columns'] = $this->blog_modle->get_machine_columns();
		$data['treadmill'] = $this->blog_modle->motor_controller();
		$this->load->view('control',$data);
	}
	public function motor1_on()
	{
		$this->blog_modle->motor1_on();
		redirect('index.php/blog/control_led','refresh');
	}
	public function motor1_off()
	{
		$this->blog_modle->motor1_off();
		redirect('index.php/blog/control_led','refresh');
	}
	public function motor_control()
	{
		$data['treadmill'] = $this->blog_modle->motor_controller();
		$this->load->view('motor_control_view',$data);
		
	}
	
	public function getData()
	{
		$mName = $_GET['mName'];
		//header('Content-type: application/json;charset=utf-8');
		//$id = $_GET['id'];
		// $sql = "SELECT * FROM  `Machine_Dynamic_Info` WHERE dCommand =  ? ORDER BY id DESC LIMIT 1";
		$sql = "SELECT * FROM `Machine_Dynamic_Info` WHERE mName = ?";
		//$query = $this->db->query($sql,$id);
		$query = $this->db->query($sql,$mName);
		foreach($query->result() as $row)
		{
			$data = array(
					"mName"   => $row->mName,
					'dCommand' => $row->dCommand,
					"dMotor1Status" => $row->dMotor1Status,
					"dMotor2Status" => $row->dMotor2Status,
					"dTreadmillStatus" => $row->dTreadmillStatus
			);
		}
		$data = json_encode($data);
		echo $data;
	}
	
	public function insertstatus()
	{
		$mName = $_GET['mName'];
		$data = array(
				'dMotor1Status' => $_GET['dMotor1Status'],
				'dMotor2Status' => $_GET['dMotor2Status']
		);
		$this->db->where('mName',$mName);
		$this->db->update('Machine',$data);
		$this->db->where('mName',$mName);
		$this->db->update('Machine_Dynamic_Info',$data);
	}
	
	public function login()
	{
		if(isset($_SESSION['level']))
		{
			$this->load->view('success');
		}
		else
		{
			$this->form_validation->set_message('required', 'Error Message');

			$this->form_validation->set_rules('username','text','required',array('required' => '請輸入帳號'));
			$this->form_validation->set_rules('password','password','required',array('required' => '請輸入密碼'));
			
			if ($this->form_validation->run() == FALSE) 
			{
				$this->load->view('blog_login');
			}
			else
			{
				$this->blog_modle->check_login();
				$this->load->view('success');
			}
		}

	}
	public function logout()
	{
		session_destroy();
		redirect('index.php/blog/login');
	}
	public function success()
	{
		$this->load->view('success');
	}
	
// 	public function shoes() {
// 		$this->load->helper('form');
// 		$this->load->library('form_validation');
		
// 		$this->form_validation->set_rules('temp','text','required');
// 		$this->form_validation->set_rules('huma','text','required');
		
// 		if ($this->form_validation->run() == FALSE)
// 		{
// 			$this->load->view('blog_shoes');
// 		}
// 		else
// 		{
// 			$this->blog_modle->set_temp();
// 			$this->load->view('success');
// 		}
// 	}
}