<?php

class Faq extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Faq_model', 'Faq');
		parent::requireLogin();
		$this->setHeaderFooter('global/header.php', 'global/footer.php');
		$this->load->model('core/Session_model', 'Session');
		$this->load->helper('url');
		$this->load->model('ticket/Threads_model', 'Tickets');
		$this->load->model('user/User_model', 'Users');
    }

    public function create()
    {
    	if($this->isPOST())
    	{
    		$create = $this->Faq->add($_POST);
    		redirect('/');
    	}
    }

    public function list()
    {
    	$data["faqs"] = $this->Faq->getFaqs();

    	$this->render('Data Faq', 'user/faq', $data);

    }

    public function edit(){
    	$faq_id = $this->uri->segment(3);
    	$data["faq"] = $this->Faq->getBy(null,['id_pertanyaan' => $faq_id])[0];
    	$this->render('Edit Faq', 'faq/create', $data);
    }

    public function save()
    {
    	if($this->isPOST())
    	{
    		$data['id_pertanyaan'] = $_POST['id_pertanyaan'];
    		$data['list_pertanyaan'] = $_POST['list_pertanyaan'];
    		$data['jawaban'] = $_POST['jawaban'];
    		$create = $this->db->update('faqs', $data, array('id_pertanyaan' => $_POST['id']));
			redirect('faq/list');
    	}
    }

}