<?php

namespace App\Controller\Front;

use App\Repository\EditorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class EditorController extends AbstractController
{
    /**
     * @Route("editor", name="editor_list")
     */
    
    public function editorList(EditorRepository $editorRepository)
    {
        $editors = $editorRepository->findAll();

        return $this->render("front/editor.html.twig", ['editors' => $editors]);
    }

    /**
     * @Route("editor/{id}", name="editor_show")
     */
    public function editordShow($id, EditorRepository $editorRepository)
    {
        $editor = $editorRepository->find($id);

        return $this->render("front/editor.html.twig", ['editor' => $editor]);
    }
}
