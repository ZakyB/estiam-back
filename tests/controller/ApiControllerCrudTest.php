<?php

use App\Controller\ApiController;
use App\Document\Festivals;
use App\Document\FestivalsRepository;
use App\Document\Informations;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
class ApiControllerCrudTest extends WebTestCase
{
    private $serializer;
    private $documentManager;
    private $controller;
    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->serializer = $this->createMock(SerializerInterface::class);
        $this->documentManager = $this->createMock(DocumentManager::class);

        $this->controller = new ApiController($this->documentManager, $this->serializer);
    }

    public function testCreate()
    {
        $festivals = new Festivals();
        $fields = new Informations();
        $fields->setNomDuFestival('test');
        $festivals->setFields($fields);
    
        $festivalsRepository = $this->createMock(FestivalsRepository::class);
        $this->client->request('POST', '/festivals', [], [], ['CONTENT_TYPE' => 'application/json'], json_encode($festivals));
    
        $this->assertEquals(201, $this->client->getResponse()->getStatusCode());
    }
}