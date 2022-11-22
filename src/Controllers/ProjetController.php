<?php 

use ProSigned\Router\BaseController;

class ProjetController extends BaseController 
{
	public function projet() {
		$this->render('projet', 'projet', ['Title ' => 'ProjetController']);
	}
}
