<?php

namespace App\Controller;
use App\Entity\Products;
use App\Entity\FormData;
use App\Entity\FormDataAdress;
use App\Form\FormData1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FormDataController extends AbstractController
{
    /**
     * @Route("/home", name="form_data_index", methods={"GET"})
     */
    public function index(): Response
    {
        $formDatas = $this->getDoctrine()
            ->getRepository(FormData::class)
            ->findAll();

        return $this->render('form_data/index.html.twig', [
            'form_datas' => $formDatas,
        ]);
    }

    /**
     * @Route("/", name="form_data_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $product = $this->getDoctrine()
        ->getRepository(Products::class)
        ->findAll();
       
        $formDatum = new FormData();
        $form = $this->createForm(FormData1Type::class, $formDatum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formDatum);
            $entityManager->flush();

            return $this->redirectToRoute('landing_page');
        }

        return $this->render('landing_page/index_new.html.twig', [
            'products'=>$product,
            'form_datum' => $formDatum,
            'form' => $form->createView(),
        ]);
    }
 
}
