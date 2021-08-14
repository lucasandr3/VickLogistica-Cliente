<?php
namespace Core;

class Controller {

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		require 'Views/template/header.php';
		require 'Views/template/sidebar.php';
//		require 'Views/template/content.php';
		require 'Views/template/footer.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

}