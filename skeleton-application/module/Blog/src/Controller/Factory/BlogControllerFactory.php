<?php
namespace Blog\Controller\Factory;

use Blog\Controller\BlogController;
use Blog\Model\PostTable;
use Blog\Form\PostForm;
use Interop\Container\ContainerInterface;

class BlogControllerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $postTable = $container->get(PostTable::class);
        $postForm = $container->get(PostForm::class);
        return new BlogController($postTable, $postForm);
    }
}

