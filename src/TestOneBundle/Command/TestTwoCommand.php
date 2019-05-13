<?php

namespace App\TestOneBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\TestOneBundle\Classes\{Manager, Connector};


class TestTwoCommand extends Command
{
    /**
     * {@inheritDoc}
     */
    protected function configure(): void
    {
        $this->setName('test:command:two');
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

        $output->writeln(['<info>----Test 2 output START----</info>', '']);
        
        foreach ($request as $key => $entity) {
            $output->writeln(
                $connector->sendData($entity['url'], $entity['data'])
            );
        }
        
        $output->writeln(['', '<info>----Test 2 output END----</info>']);
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

        // order
        $entity = new \App\TestOneBundle\Entities\Order();
        $entity->fillWithTestData();
        $manager->addEntity($entity, 'http://example.com/sales');

        // invoice
        $entity = new \App\TestOneBundle\Entities\Invoice();
        $entity->fillWithTestData();
        $manager->addEntity($entity, 'http://example.com/finance');

        $entity = null;
        unset($entity);

        return (array)$manager->findAll();
    }
}