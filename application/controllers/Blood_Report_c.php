<?php

class Blood_Report_c extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
                $this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Blood_Report_m');
                
	}	
	function index()
	{			
		$this->form_validation->set_rules('medical_center', 'Medical Center', 'required|max_length[50]');			
		$this->form_validation->set_rules('report_date_time', 'Report Date/Time', 'required|max_length[20]');			
		$this->form_validation->set_rules('status', 'Status', 'required|max_length[10]');			
		$this->form_validation->set_rules('specimen', 'SPECIMEN:', 'required|max_length[15]');			
		$this->form_validation->set_rules('wbc', 'White Blood Cell', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('rbc', 'Red Blood Cell', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('HB', 'Hemoglobin', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('HCT', 'Hematocrit', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('MCV', 'Mean Cell Volume', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('MCH', 'Mean Cell Hemoglobin', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('MCHC', 'Mean Cell Hb Conc', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('RDW', 'Red Cell Dist Width', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('platelet_count', 'Platelet count', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('mean_platelet_volume', 'Mean Platelet Volume', 'required|is_numeric|max_length[6]');			
		$this->form_validation->set_rules('blood_group', 'Blood Group', 'required|max_length[10]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('Blood_Report_v');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			$userId="omkar0931@gmail.com";
			$form_data = array(
					       	'user_id'=>$userId,
                                                'medical_center' => set_value('medical_center'),
					       	'report_date_time' => set_value('report_date_time'),
					       	'status' => set_value('status'),
					       	'specimen' => set_value('specimen'),
					       	'wbc' => set_value('wbc'),
					       	'rbc' => set_value('rbc'),
					       	'HB' => set_value('HB'),
					       	'HCT' => set_value('HCT'),
					       	'MCV' => set_value('MCV'),
					       	'MCH' => set_value('MCH'),
					       	'MCHC' => set_value('MCHC'),
					       	'RDW' => set_value('RDW'),
					       	'platelet_count' => set_value('platelet_count'),
					       	'mean_platelet_volume' => set_value('mean_platelet_volume'),
					       	'blood_group' => set_value('blood_group')
						);
					
			// run insert model to write data to db
		
			if ($this->Blood_Report_m->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('Blood_Report_c/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'You have Successfully submitted the data';
	}
}
?>