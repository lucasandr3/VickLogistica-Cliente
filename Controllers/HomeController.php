<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Home;
use \Models\Checklist;

use Dompdf\Dompdf;
use Dompdf\Options;
use CoffeeCode\Paginator\Paginator;

class HomeController extends Controller {

	private $user;

    public function __construct()
    {
         $this->user = new Usuarios();

         if (!$this->user->verifyLogin()) {
             header("Location: ".BASE_URL."login");
             exit;
		 }

		// if (!$this->user->hasPermission('dashboard_view')) {
		// $this->loadView('404/500');
        // exit;
        // } 
    }

	public function index()
	{
		$data = array('user' => $this->user);

		//$data['name'] = $this->user->getName();
//        dd(getUser());
		$data['title'] = 'Painel';
		$data['menu'] = 'home';

		$home = new Home();

		$ch_count = $home->getCountChecks();

		$page = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);
		$data['paginator'] = new Paginator("http://localhost/logistica/client/");
		$data['paginator']->pager($ch_count[0],6, $page, 2);
		// $usuarios = new Usuarios();
		// $data['lista'] = $usuarios->getAll();
	
		if(isset($_GET['filter_date']) && !empty($_GET['filter_date'])) {
            $data_filter = $_GET['filter_date'];
            $data['dtf'] = $data_filter;
            $data['checklists'] = $home->getAll($data_filter, $data['paginator']->limit(),$data['paginator']->offset());
        } else {
            $data['dtf'] = '';
            $data['checklists'] = $home->getAll($data['paginator']->limit(),$data['paginator']->offset());
        }

		// $home = new Home();
		// $data['travels'] = $home->getAll();
		// $data['stepini'] = $home->stepini();
		// $data['stepone'] = $home->stepone();
		// $data['steptwo'] = $home->steptwo();
		// $data['stepthree'] = $home->stepthree();
		// $data['stepfour'] = $home->stepfour();
		// $data['stepfive'] = $home->stepfive();
		// $data['waiting'] = $home->getWaiting();
	
		$this->loadTemplate('home/home', $data);
	}

	public function pdf($id)
    {
        $data = array();
        $ch = new Checklist();
        $data['checklist_usina'] = $ch->getCheckIdUsina($id);

        ob_start();
        $this->loadView('checklist/imprimir', $data);
        $html = ob_get_contents();
        ob_end_clean();

        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("checklist - ".$id."pdf", ["Attachment" => true]);
    }

	public function traveldata()
	{
		$home = new Home();
		if (isset($_POST['data']) && !empty($_POST['data'])) {
			
			$data = $_POST['data'];

			if ($travel = $home->getAll($data)) {
				$resposta['code'] = 0;
				$resposta['travels'] = $travel;
				echo json_encode($resposta);
				exit;
			} else {
				$resposta['code'] = 1;
				$resposta['travels'] = 'Não existe viagens para este dia.';
				echo json_encode($resposta);
				exit;
			}

		}	
	}
	
}