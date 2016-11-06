<?php
namespace Blog\Controller\Factory;


use Blog\Controller\BlogController;
use Blog\Model\PostTable;
use Interop\Container\ContainerInterface;

class BlogControllerFactory
{
    
    public function __invoke(ContainerInterface $container)
    {
        return new BlogController(
		  $container->get(PostTable::class)
		);
    }
    
    
}

