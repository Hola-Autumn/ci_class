<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/application/config/thumbnail.php 파일 생성
	썸네일 생성시 기본 설정 정보

*/

$config['thumbnail']['image_library']	= 'gd2';	// 사용되는 PHP의 내부 모듈 이름
$config['thumbnail']['creat_thumb']		= TRUE;		// 썸네일 이미지 생성 여부
$config['thumbnail']['maintain_raio']	= TRUE;		// 이미지 축소시 해상도 비율 유지 여부

$config['thumbnail']['width']			= 480;		// 축소될 이미지의 넓이
$config['thumbnail']['height']			= 480;		// 축소될 이미지의 높이

$config['thumbnail']['tumb_marker']		= "_thumb";	// 썸네일 이미지 파일명 뒤에 붙을 지시자
													// ex) 원본   ./file/upload/hello.png
													// ex) 썸네일 ./file/upload/hello_thumb.png
$config['thumbnail']['new_image']		= "./files/thumbs/";	//썸네일 저장할 경로
