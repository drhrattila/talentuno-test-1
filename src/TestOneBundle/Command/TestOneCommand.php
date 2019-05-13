<?php

namespace App\TestOneBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\TestOneBundle\Classes\{Manager, Connector};


class TestOneCommand extends Command
{

    /**
     * {@inheritDoc}
     */
    protected function configure(): void
    {
        $this->setName('test:command:one');
    }


    /**
     * execute
     *
     * @param  mixed $input
     * @param  mixed $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $request = $this->requestSetup();
        $connector = new Connector();

        $output->writeln(['<info>----Test 1 output START----</info>', '']);
        
        foreach ($request as $key => $entity) {
            $output->writeln(
                $connector->sendData($entity['url'], $entity['data'])
            );
        }
        
        $output->writeln(['', '<info>----Test 1 output END----</info>']);
    }

    
    /**
     * requestSetup
     *
     * @return array
     */
    private function requestSetup(): array
    {
        // configuring request manager (filling it with entities):
        $manager = new Manager();

        // product
        $entity = new \App\TestOneBundle\Entities\Product();
        $entity->fillWithTestData();
        $manager->addEntity($entity, 'http://example.com/product');

        // user
        $entity = new \App\TestOneBundle\Entities\User();
        $entity->fillWithTestData();
        $manager->addEntity($entity, 'http://example.com/customer');

        // cart
        $entity = new \App\TestOneBundle\Entities\Cart();
        $entity->fillWithTestData();
        $manager->addEntity($entity, 'http://example.com/cart');


        $entity = null;
        unset($entity);

        return $manager->findAll();
    }
}