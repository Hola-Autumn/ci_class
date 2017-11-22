<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/controlloers/Ex11_post.php
	HTTP POST 파라미터
*/

class Ex11_post extends CI_Controller{


	public function __construct(){
		/*	생성자, 컨트롤러가 사용할 기능들 로드	*/
		parent::__construct();

		// url -helper
		$this->load->helper('url');
	}

/*
	url 파라미터를 전달하기 위한 페이지
	http://localhost/Ex11_post
*/
	public function index(){

		$this->load->view('ex11_url_param/index');
	}

	public function result(){
		// post 파라미터 받기
		// config.php의 설정에 따라 xss공격을 걸러냄 (기본값 :TRUE)
		// $config['global_xss_filtering'] = TRUE;
		$username = $this->input->post('username');
		//xss 필터를 사용안 할 경우 두번째 파라미터를  FALSE로 설정.
		$email = $this->input->post('email',FALSE);

		// view에 전달할 데이터를 배열로 구성한다
		$data = [
			'username'	=> $username,
			'email'	=> $email
		];

		// view 출력 설정
		$this->load->view('ex11_url_param/result',$data);

	}
}