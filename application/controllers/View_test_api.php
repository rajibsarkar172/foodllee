<?php
class View_test_api extends HFood_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model(array('view_test_apimodel'));
		$this->load->library(array('form_validation','encryption'));
		$this->encryption->initialize(
				array(
						'cipher' => 'aes-256',
						'mode' => 'ctr',
						'key' => '<a 32-character random string>'
				)
		);

	}
	public function index(){
		$this->tpl->set_css(array('plugins/datatables/jquery.dataTables.min'));
		$this->tpl->set_js(array('plugins/datatables/jquery.dataTables.min'));
		$this->tpl->set_page_title('User List');
		$user_list = $this->view_test_apimodel->get_user_list();
		$this->assign('columns',array('username'=> 'User Name','fullname'=>'Full Name','email'=>'Email Address','general_address'=>'Address','gender'=>'Gender'));
		$this->assign('user_list',$user_list);
		$this->load->custom_view('view_test_api/index');
	}
	public function registration_as_provider(){
		$this->tpl->set_page_title('Create New User');
		$district = array(null=>"---Select---") + $this->view_test_apimodel->get_district_list();
		$this->assign('district_list',$district);
		$this->assign('gender',$this->statis_array('gender'));
		$thana_list = array(null=>"---- Select ----");
		if($this->input->post()){
			$district_id = $this->input->post('district_id');
			$thana_list = $thana_list + $this->view_test_apimodel->get_thana_list($district_id);
			/*---- validation rules ------*/
			$config = array(
					array(
							'field' => 'username',
							'label' => 'User Name',
							'rules' => 'required|trim|is_unique[users.username]'
					),
					array(
							'field' => 'fullname',
							'label' => 'Full Name',
							'rules' => 'required',
							'errors' => array(
									'required' => 'You must provide a %s.',
							),
					),
					array(
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required|trim|max_length[12]|min_length[5]'
					),
					array(
							'field' => 'confirm_password',
							'label' => 'Confirm Password',
							'rules' => 'required|trim|matches[password]'
					),
					array(
							'field' => 'mobile',
							'label' => 'Mobile',
							'rules' => 'required|trim|regex_match[/^[0-9]{11}$/]'
					),
					array(
							'field' => 'phone',
							'label' => 'Phone',
							'rules' => 'trim|regex_match[/^[0-9]{10}$/]'
					),
					array(
							'field' => 'email',
							'label' => 'Email',
							'rules' => 'trim|required|valid_email'
					),
					array(
							'field' => 'confirm_email',
							'label' => 'Confirm Email',
							'rules' => 'trim|required|valid_email|matches[email]'
					),
					array(
							'field' => 'gender',
							'label' => 'Gender',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'dob',
							'label' => 'Date Of Birth',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'thana_id',
							'label' => 'Thana',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'general_address',
							'label' => 'General Address',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'latitude',
							'label' => 'Latitude',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'lognitude',
							'label' => 'Lognitude',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'lognitude',
							'label' => 'Lognitude',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'is_displayed',
							'label' => 'Is Displayed',
							'rules' => 'trim'
					)
			);
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules($config);
			if($this->form_validation->run() == false)
			{	
				
			}
			else
			{
				
				$data = $this->input->post();
				$profile_pic = $_FILES['profile_pic']['name'];
				$file = base_url().'img/profile_pic/'.$profile_pic;
				$file = file_get_contents($file);
				$data['profile_pic'] = base64_encode($file);
				$data['password'] = $this->encryption->encrypt($data['password']);
				$data['created_at'] = date("Y-m-d");
				$data['updated_at'] = date("Y-m-d");
				unset($data['confirm_password']);
				unset($data['confirm_email']);
				unset($data['district_id']);
				
				//echo $this->encryption->encrypt("salman");
				//exit;
				//$data['confirm_password'] = $this->encryption->encrypt($data['confirm_password']);
				$json_data = json_encode($data);
				/*--------- curl request ----------*/
				$curl = curl_init();
				// Set some options - we are passing in a useragent too here
				curl_setopt_array($curl, array(
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_HTTPHEADER => array(
										'Content-Type: application/json'
					),
					CURLOPT_URL => 'http://localhost/foodllee/api/registration',
					CURLOPT_USERAGENT => 'Codular Sample cURL Request',
					CURLOPT_POST => 1,
					CURLOPT_POSTFIELDS => $json_data
					)
				);
				// Send the request & save response to $resp
				$resp = curl_exec($curl);
				// Close request to clear up some resources
				curl_close($curl);
			}
		}
		$this->assign('thana_list',$thana_list);
		if(!empty($resp)){
			printr($resp);
		}
		$this->load->custom_view('view_test_api/registration_as_provider');
	}
        
        	public function registration_as_receiver(){
		$this->tpl->set_page_title('Create New User');
		$district = array(null=>"---Select---") + $this->view_test_apimodel->get_district_list();
		$this->assign('district_list',$district);
		$this->assign('gender',$this->statis_array('gender'));
		$thana_list = array(null=>"---- Select ----");
		if($this->input->post()){
			$district_id = $this->input->post('district_id');
			$thana_list = $thana_list + $this->view_test_apimodel->get_thana_list($district_id);
			/*---- validation rules ------*/
			$config = array(
					array(
							'field' => 'username',
							'label' => 'User Name',
							'rules' => 'required|trim|is_unique[users.username]'
					),
					array(
							'field' => 'fullname',
							'label' => 'Full Name',
							'rules' => 'required',
							'errors' => array(
									'required' => 'You must provide a %s.',
							),
					),
					array(
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required|trim|max_length[12]|min_length[5]'
					),
					array(
							'field' => 'confirm_password',
							'label' => 'Confirm Password',
							'rules' => 'required|trim|matches[password]'
					),
					array(
							'field' => 'mobile',
							'label' => 'Mobile',
							'rules' => 'required|trim|regex_match[/^[0-9]{11}$/]'
					),
					array(
							'field' => 'phone',
							'label' => 'Phone',
							'rules' => 'trim|regex_match[/^[0-9]{10}$/]'
					),
					array(
							'field' => 'email',
							'label' => 'Email',
							'rules' => 'trim|required|valid_email'
					),
					array(
							'field' => 'confirm_email',
							'label' => 'Confirm Email',
							'rules' => 'trim|required|valid_email|matches[email]'
					),
					array(
							'field' => 'gender',
							'label' => 'Gender',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'dob',
							'label' => 'Date Of Birth',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'thana_id',
							'label' => 'Thana',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'general_address',
							'label' => 'General Address',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'latitude',
							'label' => 'Latitude',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'lognitude',
							'label' => 'Lognitude',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'lognitude',
							'label' => 'Lognitude',
							'rules' => 'trim|required'
					),
					array(
							'field' => 'is_displayed',
							'label' => 'Is Displayed',
							'rules' => 'trim'
					)
			);
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules($config);
			if($this->form_validation->run() == false)
			{	
				
			}
			else
			{
				
				$data = $this->input->post();
				$profile_pic = $_FILES['profile_pic']['name'];
				$file = base_url().'img/profile_pic/'.$profile_pic;
				$file = file_get_contents($file);
				$data['profile_pic'] = base64_encode($file);
				$data['password'] = $this->encryption->encrypt($data['password']);
				$data['created_at'] = date("Y-m-d");
				$data['updated_at'] = date("Y-m-d");
				unset($data['confirm_password']);
				unset($data['confirm_email']);
				unset($data['district_id']);
				
				//echo $this->encryption->encrypt("salman");
				//exit;
				//$data['confirm_password'] = $this->encryption->encrypt($data['confirm_password']);
				$json_data = json_encode($data);
				/*--------- curl request ----------*/
				$curl = curl_init();
				// Set some options - we are passing in a useragent too here
				curl_setopt_array($curl, array(
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_HTTPHEADER => array(
										'Content-Type: application/json'
					),
					CURLOPT_URL => 'http://localhost/foodllee/api/registration',
					CURLOPT_USERAGENT => 'Codular Sample cURL Request',
					CURLOPT_POST => 1,
					CURLOPT_POSTFIELDS => $json_data
					)
				);
				// Send the request & save response to $resp
				$resp = curl_exec($curl);
				// Close request to clear up some resources
				curl_close($curl);
			}
		}
		$this->assign('thana_list',$thana_list);
		if(!empty($resp)){
			printr($resp);
		}
		$this->load->custom_view('view_test_api/registration_as_provider');
	}
	public function view($id=null){
		$this->tpl->set_page_title('User Details');
		$user_details = $this->view_test_apimodel->get_user_details($id);
		$this->assign('user_details',$user_details);
		$this->load->custom_view('view_test_api/view');
	}
        
        public function edit($id=null){
		$this->tpl->set_page_title('User Edit');
		$user_details = $this->view_test_apimodel->get_user_details($id);
		$this->edit('user_details',$user_details);
		$this->load->custom_view('view_test_api/edit');
	}
	
}
?>