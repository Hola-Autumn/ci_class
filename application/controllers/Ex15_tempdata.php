<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/controlloers/Ex15_tempdata.php
	세션에 시간을 부여
	ex) 인증번호 부여시
*/

class Ex15_tempdata extends CI_Controller{


	public function __construct(){
		/*	생성자, 컨트롤러가 사용할 기능들 로드	*/
		parent::__construct();

		// url -helper
		$this->load->helper('url');
		$this->load->library('Session');
	}

/*	
	http://localhost/Ex15_tempdata
*/
	public function index(){
		// 저장되어 있는 Flash 데이터값 읽어오기
		$temp_input = $this->session->tempdata('temp_input');
		//혹은 세션과 동일하게 읽을 수 있음.
		// $temp_input = $this->session->userdata('temp_input');

		// 세션 값을 view에 전달하기
		$data = new stdClass();
		$data->temp_input=$temp_input;

		$this->load->view('ex15_tempdata/index',$data);

	}

	public function result(){

		//사용자의 입력값 받기
		$temp_input = $this->input->post('temp_input');

		if($temp_input){
			/* 기존의 세션을 10초간 유지되는 temp 데이터로 변환하기 */			
			// $this->session->set_userdata("temp_input",$temp_input);
			// $this->session->mark_as_temp('temp_input',10);

			/* 처음부터 10초간 유지되는 temp 데이터로 만들기*/
			$this->session->set_tempdata("temp_input",$temp_input,10);

			
		}
		/* 한 페이지만 세션이 유효하므로 삭제할 필요가 없음 */
		
		redirect('ex15_tempdata');
	}
}