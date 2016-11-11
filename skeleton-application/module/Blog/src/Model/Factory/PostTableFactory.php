<?php
 
namespace Blog\Model\Factory;


use Blog\Model\PostTable;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;
use Blog\Model;


class PostTableFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $tableGateway = $container->get(Model\PostTableGateway::class);
        $commentTable = $container->get(Model\CommentTable::class);
        return new PostTable($tableGateway,$commentTable);
    }
}

