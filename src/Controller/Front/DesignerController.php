<?php

namespace App\Controller\Front;

use App\Repository\DesignerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class DesignerController extends AbstractController
{
    /**
     * @Route("designer", name="designer_list")
     */
    
    public function designerList(DesignerRepository $designerRepository)
    {
        $designers = $designerRepository->findAll();

        return $this->render("front/designer.html.twig", ['designers' => $designers]);
    }

    /**
     * @Route("designer/{id}", name="designer_show")
     */
    public function designerdShow($id, DesignerRepository $designerRepository)
    {
        $designer = $designerRepository->find($id);

        return $this->render("front/designer.html.twig", ['designer' => $designer]);
    }
}
