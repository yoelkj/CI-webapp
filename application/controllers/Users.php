<?php

class Users extends CI_Controller
{

  public function index(){

     //users 
    $arr_users = [ 1 =>['name'=>'User 1'], 2 =>['name'=>'User 2'], 3 =>['name'=>'User 3']];
    //Get components and views
    $arr_components = ['mainMenu' => $this->load->view('Component/mainMenu', null, TRUE)];
    $this->layouts->view('Users/index', ['components' => $arr_components, 'arr_users' => $arr_users]);
  
  }

  public function form($id_user = null){
    $arr_user = [];
    
    //Get components and views
		$arr_components = ['mainMenu' => $this->load->view('Component/mainMenu', null, TRUE)];    
    $this->layouts->view('Users/form', ['components' => $arr_components,  'arr_user'=> $arr_user]);
  }

  public function show($id_user = null){
    
    if($id_user == null) show_404();
    
    $arr_users = [ 1 =>['name'=>'User 1'], 2 =>['name'=>'User 2'], 3 =>['name'=>'User 3']];

    $arr_user = (isset($arr_users[$id_user])?$arr_users[$id_user]:show_404());

    //Get components and views
    $arr_items = ['item 1', 'item 2', 'item 3', 'item 221323'];	
		$arr_components = ['mainMenu' => $this->load->view('Component/mainMenu', null, TRUE)];    
    $this->layouts->view('Users/show', ['components' => $arr_components,  'arr_user'=> $arr_user]);
  

  }
  
}
