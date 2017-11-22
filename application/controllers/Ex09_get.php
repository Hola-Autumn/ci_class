<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/controlloers/Ex09_get.php
	HTTP GET 파라미터
*/

class Ex09_get extends CI_Controller{


	public function __construct(){
		/*	생성자, 컨트롤러가 사용할 기능들 로드	*/
		parent::__construct();

		// url -helper
		$this->load->helper('url');
	}

/*
	get 파라미터를 전달하기 위한 페이지
	http://localhost/Ex09_get
*/
	public function index(){

		$this->load->view('ex09_get/index');
	}

/*
	get 파라미터를 수신하여 결과 표시하기
	http://localhost/ex09_get/result?answer=
*/
	public function result(){
		// get 파라미터 받기
		$answer = $this->input->get('answer');

		// 표시할 결과 메시지
		$msg = '';
		if($answer == 300){
			$msg = '정답';
		}else{
			$msg = '오답';
		}
	
		// view 출력 설정	
		$this->load->view('ex09_get/result',['msg'=> $msg]);
	}


}