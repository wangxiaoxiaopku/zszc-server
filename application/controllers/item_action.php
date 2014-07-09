 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Content-type:text/html;charset=utf-8");
class Item_action extends CI_Controller {
	public function __construct() 
	{ 
		parent::__construct(); 
		$this->load->database();
		date_default_timezone_set('PRC');
		mysql_query("SET NAMES 'utf-8'");
        $this->load->helper('url');
	}
	public function step1()//发起项目步骤1
	{
		$data['item_name'] = $_POST['item_name'];
		$data['item_introduce'] = $_POST['item_introduce'];
		$data['item_money'] = $_POST['item_money'];
		$data['item_start_time'] = $_POST['start_time'];
		$data['item_end_time'] = $_POST['end_time'];
		$data['item_guarantee'] = $_POST['item_guarantee'];		
		$data['item_step'] = 1;
		$this->db->insert('item',$data);
		$this->db->from('item');
		$this->db->where('item_name',$_POST['item_name']);
		$query = $this->db->get();
		$row = $query->row_array();
		$arr['item_id'] = $row['id'];
		$arr['status'] = 0;
		$arr = json_encode($arr);
		$arr = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $arr);
		print_r($arr);
	}
	public function step2()//发起项目步骤2
	{
		$id = $_POST['id'];
		$data['item_manager'] = $_POST['item_manager'];
		$data['item_manager_card'] = $_POST['item_manager_card'];
		$data['item_manager_phone'] = $_POST['item_manager_phone'];
		$data['item_team_name'] = $_POST['item_team_name'];
		$data['item_bank_name'] = $_POST['item_bank_name'];
		$data['item_bank_acount'] = $_POST['item_bank_acount'];
		$data['item_bank_num'] = $_POST['item_bank_num'];

		
		$data['item_step'] = 2;
		$this->db->where('id',$id);
		$this->db->update('item',$data);
		$arr['item_id'] = $id;
		$arr['status'] = 0;
		$arr = json_encode($arr);
		$arr = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $arr);
		print_r($arr);
	}
	// public function step3()//发起项目步骤3
	// {
	// 	$id = $_POST['id'];
	// 	$data['item_bank_name'] = $_POST['item_bank_name'];
	// 	$data['item_bank_acount'] = $_POST['item_bank_acount'];
	// 	$data['item_bank_num'] = $_POST['item_bank_num'];
	// 	$data['item_step'] = 3;
	// 	$this->db->where('id',$id);
	// 	$this->db->update('item',$data);
	// 	$arr['item_id'] = $id;
	// 	$arr['status'] = 0;
	// 	$arr = json_encode($arr);
	// 	$arr = preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $arr);
	// 	print_r($arr);
	// }

	public function item_list()//用户列表
	{
		$result=$this->db->get('item');
		$row=$result->result_array();
		foreach ($row as $key => $value) {
			$this->db->from('temp_img');
			$this->db->where('id',$row[$key]['item_img_id']);
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

}