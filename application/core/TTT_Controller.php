<?php

/**
 * Class TTT_Controller
 * onDemand TritechTeal Controller
 */
class TTT_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        // All non-essential libraries loaded
        $this->load->library('slice');
//		$logo=$this->Crud_model->getDataToTableWithColumnId("site_configs","entity","logo");
//		$data["logo"]=$logo->value;
//		$this->session->set_userdata($data);

	}
}
