<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/appliction/config/site.php
	커스텀 환경 설정 파일

*/

// case 01 : 1차 배열인 경우 
$config['company']	= '아이티페이퍼';
$config['tel']		= '02-999-8888';
$config['address']	= '서울시 서초구 서초동';

// case 02 : 2차 배열인 경우
$config['info']	= [
	'name'		=> 'itpaper',
	'tel'		=> '070-111-222',
	'address'	=> 'seoul, korea'
];
