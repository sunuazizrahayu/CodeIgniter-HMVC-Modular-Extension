<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

	public $CI;

	//fix bug
	public function is_unique($str, $field)
	{
		sscanf($field, '%[^.].%[^.]', $table, $field);
		return is_object($this->CI->db)
			? ($this->CI->db->limit(1)->get_where($table, array($field => $str))->num_rows() === 0)
			: FALSE;
	}

}

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */
