<?php

namespace TestBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SheetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SheetRepository extends EntityRepository
{
	public function getAll()
	{
		$qb = $this->createQueryBuilder('s');

		$result = $qb->getQuery()->execute();

		return $result;
	}
}
