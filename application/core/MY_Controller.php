<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Core_Controller extends CI_Controller
{

	function __construct()
  {
    parent::__construct();
  }

	public function ups($input, $name)
  {
    $loc = $this->session->userdata("dir_upload");

    $loc = str_replace("_", "/", $loc);
    $root = str_replace("application", "", APPPATH);
    $dir = $root . "/uploads/" . $loc;
    $dir = str_replace(array("\\", "//"), "/", $dir);

    // print_r($dir);

    $temn = $_FILES[$input]['tmp_name'];

    if (!file_exists("./assets/foto")) {
      mkdir($dir, 0777, true);
    }

    // $config['upload_path'] = $dir;
    $config['upload_path'] = "./assets/foto";
    // $config['allowed_types'] = 'jpg|gif|png|doc|docx|xls|xlsx|ppt|pptx|pdf|jpeg|zip|rar|tgz|7zip|tar';
    $config['allowed_types'] = 'jpg|png|jpeg';
		$config['file_name']	= $name;
    $config['max_size']     = 10240;
    // $config['max_widht'] 	= 1000;
    // $config['max_height']  	= 1000;
    // $config['file_name'] 		= round(microtime(true)*1000);

    $this->upload->initialize($config);

    if (!$this->upload->do_upload($input)) {
      return $this->upload->display_errors('', '');
    }

    return $this->upload->data('file_name');
  }
}
