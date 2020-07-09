<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module_model extends CI_Model {

    protected $modules_table;

    /**
     * Module_model constructor.
     */
    public function __construct()
    {
        $this->modules_table = 'modules';
    }

	public function getModule($id)
	{
		$query = $this->db->select('status')->get($this->modules_table);

		$qq = $this->db->select('status')->where('id', $id)->get($this->modules_table)->row('status');

		if($qq  == '1')
			return true;
		else
			return false;
	}



}
