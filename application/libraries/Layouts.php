<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Layouts { 
    
  private $CI; 
    
  private $title_for_layout = NULL; 
  
  private $title_separator = ' | '; 
  private $includes = array();
  public function __construct()  
  { 
    $this->CI =& get_instance(); 

    
  } 
    
  public function set_title($title) 
  { 
    $this->title_for_layout = $title; 
  } 
    
  public function view($view_name, $params = array(), $layout = 'default') 
  {  
    if ($this->title_for_layout !== NULL)  
    { 
      $separated_title_for_layout = $this->title_separator . $this->title_for_layout; 
    } 
      
    $view_content = $this->CI->load->view($view_name, $params, TRUE); 
  
    $this->CI->load->view('Layouts/' . $layout, array( 
      'content_for_layout' => $view_content, 
      'title_for_layout' => (isset($separated_title_for_layout))?$separated_title_for_layout:''
    )); 
  } 
    
  public function add_include($path, $prepend_base_url = TRUE) 
  { 
    if ($prepend_base_url) 
    { 
      $this->CI->load->helper('url');
      $this->includes[] = base_url($path); 
    } 
    else
    { 
      $this->includes[] = $path; 
    } 
  
    return $this; 
  } 
  
  public function print_includes_css() 
  { 
    

    $final_includes = '';
    foreach ($this->includes as $include) 
    { 
      if (preg_match('/css$/', $include)) 
      { 
        $final_includes .= '<link href="' . $include . '" rel="stylesheet" type="text/css" />'; 
      }
      
    } 
    return $final_includes; 
  }
  
  public function print_includes_js() 
  { 
 
    $final_includes = ''; 

    foreach ($this->includes as $include) 
    { 
      if (preg_match('/js$/', $include)) 
      { 
        $final_includes .= '<script type="text/javascript" src="' . $include . '"></script>'; 
      }
    } 
    return $final_includes; 
  }
}