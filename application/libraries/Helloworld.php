<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/application/libraries/Helloworld.php
	라이브러리 직접 구현하기 예제
		> 파일명 = 클래스이름 (첫글자만 대문자 나머지는 소문자)

	헬퍼 : 함수들의 모음
	라이브러리 : 클래스의 모음
*/

class Helloworld{
	// 컨트롤러의 참조를 위한 멤버변수
	var $CI;

	public function __construct(){
		//컨트롤러의 참조를 연결한다.
		$this->CI =& get_instance();
	}

	public function say_kor(){
		$this->CI->output->append_output("<h1>안녕하세요. 라이브러리</h1>");
	}

	public function say_eng(){
		$this->CI->output->append_output("<h1>Hello Library</h1>");
	}

}