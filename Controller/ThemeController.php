<?php

namespace Darkiron\ThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Netime\ModuleOnePageBundle\Entity\Page;
use Netime\ModuleOnePageBundle\Form\PageType;

class ThemeController extends Controller{

	public function indexAction(Request $request){
		return $this->render(
			'NetimeAdminBundle::index.html.twig',
			[]
		);
	}	
}