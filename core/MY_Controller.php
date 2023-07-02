<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		if (@($this->form_validation)) {
			$this->form_validation->CI =& $this;
		}
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
