<?php

namespace App\Controller\user;

use App\Entity\BuyVacin;
use App\Entity\SchoolVacin;
use App\Repository\SchoolVacinRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BuyVacinController extends AbstractController
{

    #[Route('/buy/vacin', name: 'app_buy_vacin', methods: ['POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager, SchoolVacinRepository $schoolVacinRepository): Response
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Quantity = $_POST['quantity'];
            $OthersVacinated = $_POST['OthersVacinated'];
            $id = $_POST['id_product'];
            $schoolId = $_POST['school'];

            $buyVacin = new BuyVacin();

            $school = $schoolVacinRepository->find($schoolId);

            $buyVacin->setUser($this->getUser());
            $buyVacin->setQuantity($Quantity);
            $buyVacin->setOthersVacinated($OthersVacinated);
            $buyVacin->setSchoolId($school);

            $entityManager->persist($buyVacin);
            $entityManager->flush();
            return $this->redirectToRoute('cart_add', ['productId' => $id, 'quantity' => $Quantity, 'BuyId' => $buyVacin->getId()]);
        } else {
            dd('errpr');
        }
    }
}
