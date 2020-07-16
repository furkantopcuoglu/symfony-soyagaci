<?php

namespace App\Controller;

use App\Logic\PersonLogic;
use App\Repository\KisiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonController extends AbstractController
{
    /**
     * @Route("/newPerson", name="new_person", methods={"GET","POST"})
     */
    public function newPerson(PersonLogic $personLogic): Response
    {
        // PersonLogic ile yeni kişi eklendi.
         $personLogic->addNewPerson();

        return $this->render('kisi/kisiEkle.html.twig');
    }
    /**
     * @Route("/updatePerson/{id}", name="update_person", methods={"GET","POST","PUT"})
     */
    public function updatePerson(PersonLogic $personLogic,$id,KisiRepository $kisiRepository): Response
    {
        // PersonLogic ile kişi güncellendi..
        $personLogic->updatePerson($id);

        return $this->render('kisi/kisiGuncelle.html.twig',[
            'person'=>$kisiRepository->find($id),
        ]);
    }
    /**
     * @Route("/deletePerson/{id}", name="delete_person", methods={"GET"})
     */
    public function deletePerson(PersonLogic $personLogic,$id,KisiRepository $kisiRepository): Response
    {
        // PersonLogic ile kişi Silme..
        $personLogic->deletePerson($id);

        return $this->redirectToRoute('list_person');

    }
    /**
     * @Route("/listPerson/", name="list_person", methods={"GET"})
     */
    public function listPerson(KisiRepository $kisiRepository): Response
    {
        // Kişi Listeleme
        return $this->render('kisi/kisiListe.html.twig',[
            'person'=>$kisiRepository->findAll(),
        ]);
    }
}
