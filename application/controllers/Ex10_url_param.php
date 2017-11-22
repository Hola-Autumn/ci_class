<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/controlloers/Ex10_get.php
	URL 파라미터
*/

class Ex10_url_param extends CI_Controller{


	public function __construct(){
		/*	생성자, 컨트롤러가 사용할 기능들 로드	*/
		parent::__construct();

		// url -helper
		$this->load->helper('url');
	}

/*
	url 파라미터를 전달하기 위한 페이지
	http://localhost/Ex10_url_param
*/
	public function index(){

		$this->load->view('ex10_url_param/index');
	}

/*
	GET 파라미터를 수신하여 결과 표시하기
	http://localhost/ex10_url_param/result/변수1/변수2..
	URL 파라미터는 함수 파라미터로 인식됨.
	가급적 파라미터 정의시 기본값을 설정하는 것이 좋음(대부분 false)
	기본값이 없는 상태로 해당 파라미터가 누락되면 에러 발생함.
*/
	public function result($msg1='헬로',$msg2='월드'){
		// url 파라미터 받기
		$data = new stdClass();
		$data->msg1 = $msg1;
		$data->msg2 = $msg2;
		$this->load->view('ex10_url_param/result',$data);
	}	

}