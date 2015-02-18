<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class uploads extends CI_Controller {

	var $assets;
	var $dir;
	public function __construct()
	{
		parent::__construct();
		$this->assets=base_url("assets/");
		$this->dir="uploads";
	}

	public function index()
	{

		$data['assets']=$this->assets.'/';
		$this->load->view('uploads', $data);
	}

	public function do_upload(){
		$allowed = array('png', 'jpg', 'gif','zip');

		if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

			$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

			if(!in_array(strtolower($extension), $allowed)){
				echo '{"status":"error"}';
				exit;
			}
			$file=realpath(APPPATH.'../'.$this->dir.'/').'/'.$_FILES['upl']['name'];
			$i=0;
			while(is_file($file) || file_exists($file)){
				$file=realpath(APPPATH.'../'.$this->dir.'/').'/'.$i.$_FILES['upl']['name'];
				$i++;
			}
			if(move_uploaded_file($_FILES['upl']['tmp_name'], $file)){
				echo '{"status":"success"}';
				exit;
			}
		}

		echo '{"status":"error"}';
		exit;
	}


}

 ?>
