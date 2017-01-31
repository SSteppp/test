<?php
class Controller_Galery extends Controller
{

	function __construct()
	{
		$this->model = new Model_Galery();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('galery_view.php', 'template_view.php', $data);
	}
}

?>