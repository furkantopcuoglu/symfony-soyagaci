<?php

namespace App\Logic;

use App\Entity\Kisi;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class PersonLogic
{
    private $entityManager;
    protected $requestStack;

    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack;
    }

    public function addNewPerson()
    {
        $request = $this->requestStack->getCurrentRequest();
        $entityManager = $this->entityManager;

        //Requestten gelen verileri okuyoruz.
        $isim = $request->request->get('isim');
        $soyisim = $request->request->get('soyisim');
        $cinsiyet = $request->request->get('cinsiyet');

        if ($isim && $soyisim && null != $cinsiyet) {
            // Yeni Kişi Kayıt İşlemi
            $person = new Kisi();
            $person
                    ->setIsim($isim)
                    ->setSoyisim($soyisim)
                    ->setCinsiyet($cinsiyet)
                ;
            $entityManager->persist($person);
            $entityManager->flush();
        }
    }

    public function updatePerson($id)
    {
        $request = $this->requestStack->getCurrentRequest();
        $entityManager = $this->entityManager;

        //Requestten gelen verileri okuyoruz.
        $isim = $request->request->get('isim');
        $soyisim = $request->request->get('soyisim');
        $cinsiyet = $request->request->get('cinsiyet');

        if ($isim && $soyisim && null != $cinsiyet) {
            // Kişi Güncelleme
            $person = $entityManager->getRepository(Kisi::class)->find($id);
            $person->setIsim($isim);
            $person->setSoyisim($soyisim);
            $person->setCinsiyet($cinsiyet);
            $entityManager->flush();
        }
    }

    public function deletePerson($id)
    {
        $entityManager = $this->entityManager;
        $person = $entityManager->getRepository(Kisi::class)->find($id);
        $entityManager->remove($person);
        $entityManager->flush();
    }
}
