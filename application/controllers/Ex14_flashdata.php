<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/controlloers/Ex14_flashdata.php
	한 페이지에서만 유효한 일회성 세션
	한 페이지만 세션이 유효하므로 삭제할 필요가 없음
	ex) 결제시
*/

class Ex14_flashdata extends CI_Controller{


	public function __construct(){
		/*	생성자, 컨트롤러가 사용할 기능들 로드	*/
		parent::__construct();

		// url -helper
		$this->load->helper('url');
		$this->load->library('Session');
	}

/*	
	http://localhost/Ex14_flashdata
*/
	public function index(){
		// 저장되어 있는 Flash 데이터값 읽어오기
		$temp_input = $this->session->flashdata('temp_input');
		//혹은 세션과 동일하게 읽을 수 있음.
		// $temp_input = $this->session->userdata('temp_input');

		/* 다음 기능은 Flash 데이터의 파괴를 1회 유보한다. */
		// 다음 페이지에서 삭제됨
		// $this->session->keep_flashdata('temp_input');
		// $this->session->keep_flashdata(array('temp_input', 'item2', 'item3'));

		// 세션 값을 view에 전달하기
		$data = new stdClass();
		$data->temp_input=$temp_input;

		$this->load->view('ex14_flashdata/index',$data);

	}

	public function result(){

		//사용자의 입력값 받기
		$temp_input = $this->input->post('temp_input');

		if($temp_input){
			/* 기존의 세션을 Flash 데이터로 변환하기 */			
			// $this->session->set_userdata("temp_input",$temp_input);
			// $this->session->mark_as_flash('temp_input');

			/* 처음부터 Flash 데이터로 만들기*/
			$this->session->set_flashdata("temp_input",$temp_input);

			
		}
		/* 한 페이지만 세션이 유효하므로 삭제할 필요가 없음 */
		
		redirect('ex14_flashdata');
	}
}