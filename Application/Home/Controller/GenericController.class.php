<?php
namespace Home\Controller;
use Think\Controller;
class GenericController extends Controller {
    public function index(){
    	$this->display('Generic/generic');
    }
}