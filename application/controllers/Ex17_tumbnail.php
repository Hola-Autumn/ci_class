<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
git test  주석수정
*/
/*
	/controlloers/Ex17_tumbnail.php
	썸네일 만들기
*/

class Ex17_tumbnail extends CI_Controller{


	public function __construct(){
		/*	생성자, 컨트롤러가 사용할 기능들 로드	*/
		parent::__construct();

		$this->config->load('upload');		// 업로드 설정정보 (폴더경로 얻기 위해)
		$this->config->load('thumbnail');	// 썸네일 설정정보 로드
		$this->load->helper('url');			// view에서 base_url() 사용하기 위해
		$this->load->helper('util');		// debug() 함수로 결과 출력하기 위해
		$this->load->helper('file');		// 파일헬퍼(업로드 폴더의 파일목록 조회)
		$this->load->library('image_lib');	// 썸네일 생성 라이브러리
		
		
	}
/*	
	http://localhost/Ex17_tumbnail
*/
	public function index(){		

		// 전체 환경 설정 정보에서 썸네일 관련 정보만 추출
		$config = $this->config->item('thumbnail');

		// 썸네일이 생성될 폴더가 없다면 생성한다.
		if (!is_dir($config['new_image'])){
			mkdir($config['new_image'], 0777, true);
			chmod($config['new_image'], 0777);
		}

		// 전체 환경설정 정보에서 파일이 저장되어 있는 디렉토리 경로만 추출
		$upload_config = $this->config->item('upload');
		$dir = $upload_config['upload_path'];

		// 디렉토리 파일 정보들을 추출한다.
		// --> 두번째 파라미터 [ TRUE : 절대경로 리턴 / FALSE : 파일명만 리턴 ]
		$files = get_filenames($dir,TRUE);
		//debug($files);

		foreach ($files as $key => $item) {
			// 설정정보에 원본파일 경로 추가
			$config['source_image'] = $item;
			
			// 설정 정보를 라이브러리에 로드시킴
			$this->image_lib->initialize($config);

			// 이미지 리사이즈 (성공시 true, 실패시 false)
			$result = $this->image_lib->resize();

			if(!$result){
				debug($this->image_lib->display_errors());
			}else{
				debug("썸네일 생성 성공",$item);
			}
		}


		//$this->load->view('ex17_tumbnail/index');

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
	}
}