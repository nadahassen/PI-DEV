<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Repository\ClassroomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route ;



class ClassroomController extends AbstractController
{
    
    /**
     * @Route("/nidh",name="test")
     */
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }


    /**
     * @Route("classroom/affiche",  name="affiche")
     * @param ClassroomRepository $repository
     * @return Response
     */
    
    public function aff(ClassroomRepository $repository): Response
    {

        $classroom=$repository->findAll();
        return $this->render('classroom/aff.html.twig', [
            'classroom' => $classroom,
        ]);
    }

    /*
    public function Delete($id,ClassroomRepository $repository){
        $classroom=$repository->find($id);
        $del=$this->getDoctrine()->getManager();
        $del->remove($classroom);
    }*/
}

