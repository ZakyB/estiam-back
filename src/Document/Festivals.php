<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use MongoDB\BSON\ObjectId;

#[MongoDB\Document(repositoryClass: FestivalsRepository::class)]
class Festivals {
    
    #[MongoDB\Id]
    protected $id;

    #[MongoDB\EmbedOne(targetDocument: Informations::class)]
    private $fields;

    #[MongoDB\Field(type: 'collection')]
    private array $geometry = [];

    public function getId(): ?string
    {
        return $this->id;
    }
    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getFields(): ?Informations  // Add the Informations type hint
    {
        return $this->fields;
    }

    public function setFields(Informations $fields)  // Add the Informations type hint
    {
        $this->fields = $fields;
    }

    public function getGeometry(): array  // Add the array type hint
    {
        return $this->geometry;
    }
    public function setGeometry(array $geometry)  // Add the array type hint
    {
        $this->geometry = $geometry;
    }
}