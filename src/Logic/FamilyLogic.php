<?php
namespace App\Logic;


use App\Entity\Aile;
use App\Entity\Kisi;


use Doctrine\ORM\EntityManagerInterface;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;

class FamilyLogic
{
    private $entityManager;

    protected $requestStack;

    public function __construct(EntityManagerInterface $entityManager,RequestStack $requestStack)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack;
    }

    public function addNewFamily()
    {

        $request = $this->requestStack->getCurrentRequest();
        $entityManager = $this->entityManager;
        //Requestten gelen verileri okuyoruz.
        $birinci = $request->request->get('birinci');
        $ikinci = $request->request->get('ikinci');

        // Yeni Evli Çift Kaydı
        $aile = new Aile();
        $aile
        ->setBirinci($entityManager->find(Kisi::class, $birinci))
        ->setIkinci($entityManager->find(Kisi::class, $ikinci))
        ->setIliskidurumu(1);
        $entityManager->persist($aile);
        $entityManager->flush();


    }

    public function updateFamily($id)
    {

        $request = $this->requestStack->getCurrentRequest();
        $entityManager = $this->entityManager;

        //Requestten gelen verileri okuyoruz.
        $birinci = $request->request->get('birinci');
        $ikinci = $request->request->get('ikinci');

        if($birinci and $ikinci != null){
            // Kişi Güncelleme
            $family = $entityManager->getRepository(Aile::class)->find($id);
            $family->setBirinci($entityManager->find(Kisi::class, $birinci));
            $family->setIkinci($entityManager->find(Kisi::class, $ikinci));
            $entityManager->flush();
        }
    }

    public function deleteFamily($id)
    {
        $entityManager = $this->entityManager;
        $family = $entityManager->getRepository(Aile::class)->find($id);
        $entityManager->remove($family);
        $entityManager->flush();
    }

    // Child İşlemleri

    public function addNewFamilyChild()
    {

        $request = $this->requestStack->getCurrentRequest();
        $entityManager = $this->entityManager;
        //Requestten gelen verileri okuyoruz.
        $birinci = $request->request->get('birinci');
        $ikinci = $request->request->get('ikinci');
        $cocukdurumu = $request->request->get('cocukdurumu');

        // Yeni Evli Çift Kaydı
        $aile = new Aile();
        $aile
            ->setBirinci($entityManager->find(Kisi::class, $birinci))
            ->setIkinci($entityManager->find(Kisi::class, $ikinci))
            ->setIliskidurumu(2)
            ->setCocukdurumu($cocukdurumu)
        ;
        $entityManager->persist($aile);
        $entityManager->flush();


    }

    public function updateFamilyChild($id)
    {

        $request = $this->requestStack->getCurrentRequest();
        $entityManager = $this->entityManager;

        //Requestten gelen verileri okuyoruz.
        $birinci = $request->request->get('birinci');
        $ikinci = $request->request->get('ikinci');
        $cocukdurumu = $request->request->get('cocukdurumu');

        if($birinci and $ikinci != null){
            // Çocuk Güncelleme
            $child = $entityManager->getRepository(Aile::class)->find($id);
            $child->setBirinci($entityManager->find(Kisi::class, $birinci));
            $child->setIkinci($entityManager->find(Kisi::class, $ikinci));
            $child->setCocukdurumu($cocukdurumu)
            ;
            $entityManager->flush();
        }
    }

    public function deleteFamilyChild($id)
    {
        $entityManager = $this->entityManager;
        $cocuk = $entityManager->getRepository(Aile::class)->find($id);
        $entityManager->remove($cocuk);
        $entityManager->flush();
    }
}
