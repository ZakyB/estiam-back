<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Serializer\SerializerInterface;


use App\Document\Festivals;


class ApiController extends AbstractController
{
    private $documentManager;
    private $serializerInterface;

    public function __construct(DocumentManager $documentManager, SerializerInterface $serializerInterface) 
    {
        $this->documentManager = $documentManager;
        $this->serializerInterface = $serializerInterface;
    }

    #[Route('/api', name: 'app_api')]
    public function index(): Response
    {
        dd($this->documentManager);
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }

    #[Route('/festivals', name: 'festivals_all', methods:['GET'])]
    public function all(): Response
    {
        $festivals = $this->documentManager->getRepository(Festivals::class)->findAll();
        return $this->json($festivals);
    }

    #[Route('/festivals/{id}', name: 'festivals_id', methods:['GET'])]
    public function getById($id): Response 
    {
        $festivals = $this->documentManager->getRepository(Festivals::class)->find($id);
        
        if ($festivals) {
            return $this->json($festivals);
        } else {
            return $this->json(["error" => "festivals was not found by id:" . $id], 404);
        }
    }

    #[Route('/festivals', name: 'festivals_create', methods:['POST'])]
    public function create(Request $request): Response 
    {
        
        $festivals = $this->serializerInterface->deserialize($request->getContent(), Festivals::class, 'json');
        $this->documentManager->persist($festivals);
        $this->documentManager->flush();

        return $this->json($festivals, 201);
    }

    #[Route('/festivals/{id}', name: 'festivals_update', methods:['PUT'])]
    public function update(Request $request, $id): Response 
    {
        
        $festivals = $this->documentManager->getRepository(Festivals::class)->find($id);
        
        if (!$festivals) {
            return $this->json(["error" => "festivals was not found by id:" . $id], 404);
        }

        $arrayfestivalsU = json_decode($request->getContent(),true);
        $arrayfestivals = json_decode($this->serializerInterface->serialize($festivals, 'json'),true);
        
        $documentU = $this->serializerInterface->deserialize(
                json_encode(array_replace_recursive($arrayfestivals,$arrayfestivalsU)),
                festivals::class, 'json');

        $this->documentManager->merge($documentU);
        $this->documentManager->flush();

        return $this->json([], 204);
    }

    #[Route('/festivals/{id}', name: 'festivals_delete', methods:['DELETE'])]
    public function deleteById($id): Response 
    {
        $festivals = $this->documentManager->getRepository(festivals::class)->find($id);
        
        if ($festivals) {
            $this->documentManager->remove($festivals);
            $this->documentManager->flush();
            return $this->json([], 204);
        } else {
            return $this->json(["error" => "festivals was not found by id:" . $id], 404);
        }

    }

    #[Route('/festivals/{filter}/{value}', name: 'festivals_filter', methods:['GET'])]
    public function filter($filter,$value): Response {
        $festivals = $this->documentManager->getRepository(Festivals::class)->getFestivalsByInfo($filter,$value);
        
        return $this->json($festivals);
    }

  


}
