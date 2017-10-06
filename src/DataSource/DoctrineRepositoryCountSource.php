<?php

namespace Fosyl\ReportOne\DataSource;

use Doctrine\ORM\EntityManager;
use Fosyl\ReportOne\Data;
use Fosyl\ReportOne\Data\LabeledData;
use Fosyl\ReportOne\DataSource;
use Fosyl\ReportOne\Input;

class DoctrineRepositoryCountSource implements DataSource
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param Input $input
     *
     * @return Data
     */
    public function fetch(Input $input): Data
    {
        $fqcn = $input->getParameter('classname');

        $qb = $this->entityManager->createQueryBuilder();

        $qb->select('COUNT(o)');
        $qb->from($fqcn,'o');

        return new LabeledData([
            'count' => 'Count'
        ], [
            'count' => $qb->getQuery()->getSingleScalarResult()
        ]);
    }
}
