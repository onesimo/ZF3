<?php

namespace Blog\Controller;

use Blog\Model\PostTable;
use Blog\Form\PostForm; 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class BlogController extends AbstractActionController
{	
	private $table;

	public function __construct(PostTable $table)
	{
		$this->table = $table;
	}

	public function indexAction()
	{	
		$postTable = $this->table;

		return new ViewModel([
			'posts' => $postTable->fetchAll()
		]);
	}

	public function addAction()
	{
		$form = new PostForm();
		$form->get('submit')->setValue('Add Post');

		return new ViewModel(['form'=>$form]);
	}
}