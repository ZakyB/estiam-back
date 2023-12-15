<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Repository\DocumentRepository;

class FestivalsRepository extends DocumentRepository {
    public function getFestivalsByInfo($filtre, $value)
    {
        return $this->createQueryBuilder()
        ->field('fields.'.$filtre)->equals($value)
        ->getQuery()
        ->execute();
    }
}
