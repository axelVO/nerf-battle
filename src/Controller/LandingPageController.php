<?php

namespace App\Controller;

use App\Entity\Products;
use App\Entity\FormData;
use App\Entity\FormDataAdress;
use App\Form\DataAdressType;
use App\Form\FormDataType;
use App\Form\ProductFormType;

use App\Manager\OrderManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;


class LandingPageController extends Controller
{
    /**
     * @Route("/a", name="landing_page" ,methods={"GET", "POST"})
     * @throws \Exception
     */
    public function index(Request $request,ObjectManager $objectManage)
    {
        $product = $this->getDoctrine()
        ->getRepository(Products::class)
        ->findAll();
       
    
        
        return $this->render('landing_page/index_new.html.twig', [
            'products'=>$product,
            
            //'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/confirmation", name="confirmation")
     */
    public function confirmation()
    {
        return $this->render('landing_page/confirmation.html.twig', [

        ]);
    }


}
