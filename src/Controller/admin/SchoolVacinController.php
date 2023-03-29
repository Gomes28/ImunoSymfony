<?php

namespace App\Controller\admin;

use App\Entity\Products;
use App\Entity\SchoolVacin;
use App\Form\ProductType;
use App\Form\SchoolVacinType;
use App\Repository\SchoolVacinRepository;
use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SchoolVacinController extends AbstractController
{
    #[Route('/admin/school/list', name: 'app_admin_school_list')]
    public function index(SchoolVacinRepository $schools): Response
    {
        $school = $schools->findAll();

        return $this->render('admin/pages/school_vacin/index.html.twig', [
            'school' => $school,
        ]);
    }

    #[Route('/admin/school/delete/{id}', name: 'app_admin_school_delete')]
    public function delete(Request $request, SchoolVacinRepository $schools, $id): Response
    {
        $school = $schools->find($id);

        if (!$school) {
            throw $this->createNotFoundException('Escola não encontrada');
        }

        $schools->remove($school, true);

        return $this->redirectToRoute('app_admin_school_list');
    }


    #[Route('/admin/school/new', name: 'app_admin_school_new')]
    public function list(Request $request, SchoolVacinRepository $schools): Response
    {
        $school = new SchoolVacin();
        $form = $this->createForm(SchoolVacinType::class, $school);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $school->setName($form['name']->getData());
            $schools->save($school, true);
            }

        $this->redirectToRoute('app_admin_school_list');

        return $this->render('admin/pages/school_vacin/new.html.twig', [
            'SchoolForm' => $form
        ]);
    }
}
