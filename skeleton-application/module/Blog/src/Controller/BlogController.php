<?php

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class BlogController extends AbstractActionController
{
	public function indexAction()
	{	
		$posts = [
			['title' => 'post 1 ','content'=> 'content 1'],
			['title' => 'post 2 ','content'=> 'content 2'],
			['title' => 'post 3 ','content'=> 'content 3'],
			['title' => 'post 4 ','content'=> 'content 4'],
		];
		return new ViewModel(['posts' => $posts]);
	}
}