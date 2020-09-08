<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Admin extends TTT_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Childminder_model');


	}

	public function mapApi(){
		if ($this->input->post()){
			$form_data=$this->input->post();

			if ($this->input->post("submit") != null){
				$site["value"] = json_encode($form_data);
				$site["entity"] = "mapapi";
				$data["site_data"]=$this->Crud_model->updateDataToTableWithColumnId("site_configs","entity","mapapi",$site);
			}else {
				$site["value"] = json_encode($form_data);
				$site["entity"] = "mapapi";
				$this->Crud_model->insert('site_configs', $site);
			}
		}

		$data["site_data"]=$this->Crud_model->getDataToTableWithColumnId("site_configs","entity","mapapi");
		if ($data["site_data"] != null){
			$data["site_data"]->value = json_decode($data["site_data"]->value);
		}

		$this->slice->view('admin.setting.apis',$data);


	}


	public function siteLog(){
		if ($this->input->post()){
			$logo=$this->do_upload("logo");
			$site["value"] = $logo;
			$site["entity"] = "logo";
			$status=$this->Crud_model->updateDataToTableWithColumnId("site_configs","entity","logo",$site);

//			}
//			if ($_FILES["fav_icon"]!= null) {
//			$fav_icon=	$this->do_upload("fav_icon");
//			$fav["value"] = $fav_icon;
//			$fav["entity"] = "fav_icon";
//			$this->Crud_model->insert('site_configs', $fav);
//			}


		}
		$this->slice->view('admin.setting.logos');
	}

	/**
	 * Handle Upload
	 *
	 * @param input_name
	 * @return  Image
	 */
	public function do_upload($input_name)
	{
		//todo:set unique name to file
		$date = new DateTime();
		$startdata = $date->format('YmdHis');
		$newName = str_replace('/', '', $startdata) . $this->auth->userID();
		$file_ext = pathinfo($_FILES[$input_name]["name"], PATHINFO_EXTENSION);
		$config['file_name'] = $newName;
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'jpg|fav|png';
//		$config['allowed_types'] = '*';
		$config['max_size'] = 2048;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($input_name)) {
			$error = array('error' => $this->upload->display_errors());
			$this->validationErrors = $error;
			return false;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$image = $data['upload_data']['file_name'];
			return $image;
		}
	}
}
