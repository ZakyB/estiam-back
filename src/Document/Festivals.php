<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document(repositoryClass: FestivalsRepository::class)]
class Festivals {
    
    #[MongoDB\Id]
    protected $id;

    #[MongoDB\EmbedOne(targetDocument: Informations::class)]
    private $fields;

    #[MongoDB\Field(type: 'collection')]
    private array $geometry = [];

    public function getId(): string 
    {
        return $this->id;
    }
    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function getGeometry()
    {
        return $this->geometry;
    }
    public function setGeometry($geometry)
    {
        $this->geometry = $geometry;
    }
}