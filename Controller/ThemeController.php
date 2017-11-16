<?php

namespace Darkiron\ThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ThemeController extends Controller{
	public function indexAction(Request $request){
		return new Response('Boostrap Theme Bundle',Response::HTTP_OK);	
	}	
}
