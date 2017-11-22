<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/controlloers/Ex16_upload.php
	업로드
*/

class Ex16_upload extends CI_Controller{


	public function __construct(){
		/*	생성자, 컨트롤러가 사용할 기능들 로드	*/
		parent::__construct();

		// 
		$this->load->helper('url');		// view에서 base_url() 사용하기 위해
		$this->load->helper('util');	// debug() 함수로 결과 출력하기 위해
		$this->load->library('upload');	// 업로드 라이브러리
		$this->config->load('upload');	// 환경설정 로드
		
	}
/*	
	http://localhost/Ex16_upload
*/
	public function index(){		

		$this->load->view('ex16_upload/index');

	}

	public function result(){
		// 전체 환경설정 정보에서 메일 발송에 필요한 정보만 추출
		$config = $this->config->item('upload');

		//파일이 업로드 될 폴더가 존재하지 않는다면 생성한다.
		if (!is_dir($config['upload_path'])){
			// 경로, 퍼미션, 하위폴더 생성여부
			mkdir($config['upload_path'], 766, TRUE);
			chmod($config['upload_path'], 766);
		}

		// 업로드 라이브러리에 환경설정 정보 등록
		$this->upload->initialize($config);

		//업로드 수행 --> 실패시 FALSE 리턴됨
		$result = $this->upload->do_upload('photo');	// <input name='photo'>

		$data = FALSE;
		if(!$result){
			// 실패시 에러정보를 조회
			$data = $this->upload->display_errors();
		}else{
			//업로드 된 결과 데이터를 조회
			$data = $this->upload->data();
		}

		debug($data);
		//redirect('ex16_upload');
	}
}