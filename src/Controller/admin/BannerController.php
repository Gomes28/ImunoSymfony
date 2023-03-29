<?php

namespace App\Controller\admin;

use App\Entity\Banner;
use App\Form\BannerType;
use App\Repository\BannerRepository;
use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BannerController extends AbstractController
{
    #[Route('/admin/banner/new', name: 'app_banner_new')]
    public function new(Request $request, BannerRepository $banners): Response
    {
        $banner = new Banner();
        $form = $this->createForm(BannerType::class, $banner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var__ UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile) {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads/banner';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $banner->setTitle($form['title']->getData());
                $banner->setImage($newFilename);
                $banners->save($banner, true);
            }}

        return $this->render('admin/pages/banner/new.html.twig', [
            'BannerForm' => $form,
        ]);
    }
}
