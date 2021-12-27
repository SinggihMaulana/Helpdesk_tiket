<?PHP

class Landingpage extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->setHeaderFooter('auth/header.php', 'auth/footer.php');
		$this->load->model('Faq_model', 'Faq');
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
	}
	public function index()
	{ 
		$data['faqs'] = $this->Faq->getFaqs();
		$data['login'] = False;
		$this->load->view('/templates/header_1', $data);
        $this->load->view('/templates/footer');
		$this->render('Landing', 'dashboard');
		
	}


}
