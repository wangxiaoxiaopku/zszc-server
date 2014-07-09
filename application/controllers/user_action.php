<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Content-type:text/html;charset=utf-8");
class User_action extends CI_Controller {
	public function __construct() 
	{ 
		parent::__construct(); 
		$this->load->database();
		date_default_timezone_set('PRC');
		mysql_query("SET NAMES 'utf-8'");
        $this->load->helper('url');
	}
	public function clear_acount()//删除一周之内没激活的账号
	{
		$c_time = time();
		$time = $c_time-(60*60*24*7);
		$this->db->where('ctime <',$time);
		$this->db->where('user_active',0);
		$this->db->delete('zs_user_info');
	}
	public function register()//注册
	{
		$this->clear_acount();
		$this->db->from('zs_user_info');
		$this->db->where('user_email',$_POST['user_email']);
		$query = $this->db->get();
		$row = $query->row_array();
		if($row)$arr['error']=1;
		else{
		$data['user_img'] = 1;
		$data['screat_key'] = md5(mt_rand(1,1000));
		$data['user_pwd'] = md5($_POST['user_pwd']); 
		$data['user_email'] = $_POST['user_email'];
		$data['user_name'] = $_POST['user_name'];
		$data['user_sex'] = $_POST['user_sex'];//0是男，1是女，2是保密
		$data['real_name'] = $_POST['real_name'];
		$data['user_status'] = 1;//普通用户
		$data['user_active'] = 0;

		$data['ctime']= time();
		$this->db->insert('zs_user_info',$data);

		$user_email = $_POST['user_email'];			
		$this->db->from('zs_user_info');
		$this->db->where('user_email',$user_email);
		$query = $this->db->get();
		$row = $query->row_array();

		$str['zszc_id'] = $row['id'];
		$str['user_status'] = $row['user_status'];
		$str['user_name'] = $row['user_name'];
		$this->session->set_userdata($str);

		$email = $_POST['user_email'];
		$title = iconv("utf-8","gb2312//IGNORE",'众善众筹账号激活');

		$base = $this->config->item('base_url');
		$message1 = iconv("utf-8","gb2312//IGNORE",'请将此链接复制到浏览器激活账号，否则你的账号将在七天后被系统自动清除哦。');
		$message2 = $base.'index.php/welcome/active_acount?email='.$_POST['user_email'].'&screat_key='.$data['screat_key'];
		$message = $message1.'  '.$message2;

		$this->send_email($email,$title,$message);

		$arr['status'] = 0;
		}
		$arr = json_encode($arr);
		$arr = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $arr);
		print_r($arr);
	}

	public function send_email($email,$title,$message)//邮件验证
	{
	
		$this->load->library('email');
		$this->config->load('my_email');		
		$config['protocol'] = $this->config->item('protocol'); 
		$config['smtp_host'] = $this->config->item('smtp_host'); 
		$config['smtp_user'] = $this->config->item('smtp_user');
		$config['smtp_pass'] = $this->config->item('smtp_pass'); 
		$config['mailtype'] = $this->config->item('mailtype');
		$config['validate'] = $this->config->item('validate'); 
		$config['priority'] = $this->config->item('priority'); 
		$config['crlf'] = $this->config->item('crlf'); 
		$config['smtp_port'] = $this->config->item('smtp_port');
		$config['charset'] = $this->config->item('charset'); 
		$config['wordwrap'] = $this->config->item('wordwrap');
		$this->email->initialize($config);
		$this->email->from($config['smtp_user']); 


		$this->email->to($email);  
		$this->email->subject($title); 
		$this->email->message($message);  
		$this->email->send();

	}

	public function login()//登陆
	{
		$this->clear_acount();
		$user_email = $_POST['user_email'];
		$user_pwd = md5($_POST['user_pwd']); 
			
		$this->db->from('zs_user_info');
		$this->db->where('user_email',$user_email);
		$query = $this->db->get();
		$row = $query->row_array();
		if(!$row)$arr['error'] = 1;//该用户不存在
		elseif($row['user_pwd']!=$user_pwd)$arr['error'] = 2;//密码错误
		else//session管理
		{		
			$str['zszc_id'] = $row['id'];
			$str['user_status'] = $row['user_status'];
			$str['user_name'] = $row['user_name'];
			$this->session->set_userdata($str);
			$arr['status'] = 0;//login_success
		}
		$arr = json_encode($arr);
		$arr = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $arr);
		print_r($arr);
	}
	public function logout()//登出
	{
		$this->session->unset_userdata('zszc_id');
		$this->session->unset_userdata('user_status');
		$this->session->unset_userdata('user_name');
	}
	public function active_acount()//邮箱验证激活
	{

		$user_email = $_POST['user_email'];
		$screat_key = $_POST['screat_key'];
		$this->db->from('zs_user_info');
		$this->db->where('user_email',$user_email);
		$query = $this->db->get();
		$row = $query->result_array();
		if($row[0]['screat_key'] == $screat_key){
		$data['user_status'] = 1;
		$this->db->where('user_email',$user_email);
		$this->db->update('t_users',$data);
		$arr['status'] = 0;//active_successs
		}
		else{
			$arr['status'] = 1;//操作非法
		}
		$arr = json_encode($arr);
		$arr = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $arr);
		print_r($arr);
	}
	public function get_pwd()//找回密码
	{
		$email = $_POST['user_email'];
		$this->db->where('user_email',$email);
		$this->db->from('zs_user_info');
		$query = $this->db->get();
		$row = $query->result_array();
		$count_flag = count($row);
		if($count_flag != 0 )
		{
			$title = iconv("utf-8","gb2312//IGNORE",'众善众筹密码找回');
			$base = $this->config->item('base_url');
			$message = $base.'index.php/welcome/update_pwd?screat_key='.$row[0]['screat_key'].'&id='.$row[0]['id'] = $row[0]['id'];
			$message = iconv("utf-8","gb2312//IGNORE",$message);
			$this->send_email($email,$title,$message);
			$arr[0]['status'] = 0;
		}
		else 
		{			
			$arr[0]['status'] = 1;//邮箱不存在
		}
		$arr = json_encode($arr);
		//$arr = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $arr);
		echo $arr;
		//print_r($count_flag);
	}

	public function person_list()//用户个人信息
	{
		$user_name = $_POST['user_name'];
		$this->db->from('zs_user_info');
		$this->db->where('user_name',$user_name);
		$result=$this->db->get();
		$row=$result->result_array();
		foreach ($row as $key => $value) {
		 	foreach ($value as $key1 => $value1) {
		 	if($key1 == 'user_pwd')unset($row[$key][$key1]);
		 	else if($key1 == 'screat_key')unset($row[$key][$key1]);
		 	}
		 }

		$this->db->from('temp_img');
		$this->db->where('id',$row[0]['user_img']);
		$result1=$this->db->get();
		$row1=$result1->result_array();

		$row[0]['img_file1'] = $row1[0]['img_file1'];
		$row[0]['img_file2'] = $row1[0]['img_file2'];


		$arr = json_encode($row);
		$arr = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $arr);
		print_r($arr);
	}
	public function user_list()//用户列表
	{
		$result=$this->db->get('zs_user_info');
		$row=$result->result_array();
		foreach ($row as $key => $value) {
		 	foreach ($value as $key1 => $value1) {
		 	if($key1 == 'user_pwd')unset($row[$key][$key1]);
		 	else if($key1 == 'screat_key')unset($row[$key][$key1]);
		 	}
		 }
		foreach ($row as $key => $value) {
			$this->db->from('temp_img');
			$this->db->where('id',$row[$key]['user_img']);
			$result1 = $this->db->get();
			$row1 = $result1->result_array();
			foreach ($value as $key1 => $value1) {
				$row[$key][$key1] = $value1;
				$row[$key]['img_file1'] = $row1[0]['img_file1'];
				$row[$key]['img_file2'] = $row1[0]['img_file2'];
			}
		}
		$arr = json_encode($row);
		$arr = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $arr);
		print_r($arr);
		

	}
	public function user_del_id()//删除用户
	{
		$this->db->where('id',$_GET['id']);
		$this->db->delete('zs_user_info');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */