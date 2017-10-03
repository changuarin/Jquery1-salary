<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {

	public function index()
	{
		$data['salaries']= $this->mod_model->getSalary();
		//echo json_encode($data["salaries"]);
		$this->load->view('expenses', $data);
	}
	

	public function get_salary($id)
	{
		//$this->db->where('id', $id);

		//$query = $this->db->get('salary');
		$salary = $this->mod_model->get_salary($id);
		//$salary = $query->row();

		echo json_encode($salary);
	}

	/*public function add()
	{
		$this->form_validation->set_rules('food', 'Number', 'trim|required');

		if($this->form_validation->run()== FALSE)
		{
			redirect('expenses/index');
		}
		else
		{
			$data = array
			(
				'allowance'      => $this->input->post('allowance'),
				'food'           => $this->input->post('food'),
				'transportation' => $this->input->post('transpo')
 			);

		}
		if($this->mod_model->add($data))
		{
			$this->session->set_flashdata('succ_msg', 'Successfully Inserted!');
			redirect('expenses/index');
		}
	}
	*/
}	