<?php
namespace Home\Controller;
use Think\Controller;
class ElementsController extends Controller {
    public function index(){
    	$this->display('Elements/elements');
    }
}