<?php

namespace App\Controller;

use App\Logic\FamilyLogic;
use App\Repository\AileRepository;
use App\Repository\KisiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FamilyController extends AbstractController
{
    /**
     * @Route("/newFamily", name="new_family", methods={"GET","POST"})
     * @param Request $request
     * @param FamilyLogic $familyLogic
     * @param AileRepository $aileRepository
     * @param KisiRepository $kisiRepository
     * @return Response
     */
    public function newFamily(Request $request, FamilyLogic $familyLogic, AileRepository $aileRepository, KisiRepository $kisiRepository): Response
    {
        $birinci = $request->request->get('birinci');
        $ikinci = $request->request->get('ikinci');
        // Seçilen değerin 2 side aynı olması engelleniyor.

        if ($birinci && null != $ikinci) {
            if ($birinci == $ikinci) {
                return new Response('İkiside aynı kişi !');
            }

            // Aile Repository den sorgubir fonksiyonuna parametre
            // gönderilip sql srogu yaptıırldı.
            $sorgu = $aileRepository->kontrolSorgu($birinci, $ikinci);

            // $sorgu dan gelen değerlerin daha önce evli olup olmadıklarının
            // kontrolü sağlanıyor.
            // iliskidurumu = 1 olduğu zaman kisiler evli.
            // iliskidurumu = 2 olduğu zaman seçilenlerin ikiside çocuk
            // yada sorgu boş dönerse yeni kisi olduğu için kayıt edilir.
            foreach ($sorgu as $key) {
                if (1 == $key['iliskidurumu']) {
                    return new Response('Hata Seçilenler Evli !');
                }
                if (2 == $key['iliskidurumu']) {
                    //Logic İle Yeni Evli Aile Ekleniyor.
                    $familyLogic->addNewFamily();

                    return $this->redirectToRoute('list_family');
                }
            }
            if (null == $sorgu) {
                //Logic İle Yeni Evli Aile Ekleniyor.
                $familyLogic->addNewFamily();

                return $this->redirectToRoute('list_family');
            }
        }

        return $this->render('aile/aileEkle.html.twig', [
            'kisi' => $kisiRepository->findAll(),
        ]);
    }

    /**
     * @Route("/updateFamily/{id}", name="update_family", methods={"GET","POST","PUT"})
     *
     * @param KisiRepository $kisiRepository
     * @param Request $request
     * @param FamilyLogic $familyLogic
     * @param $id
     * @param AileRepository $aileRepository
     * @return Response
     */
    public function updateFamily(KisiRepository $kisiRepository, Request $request, FamilyLogic $familyLogic, $id, AileRepository $aileRepository): Response
    {
        // Güncelleme işleminde tam kontrol sağlanmadı.

        $birinci = $request->request->get('birinci');
        $ikinci = $request->request->get('ikinci');
        // Seçilen değerin 2 side aynı olması engelleniyor.
        if ($birinci && null != $ikinci) {
            if ($birinci == $ikinci) {
                return new Response('İkiside aynı kişi !');
            } else {
                // FamilyLogic ile aile güncellendi..
                $familyLogic->updateFamily($id);
            }
        }

        $tumAile = $aileRepository->find($id);

        return $this->render('aile/aileGuncelle.html.twig', [
            'aile' => $aileRepository->aileTekIsimSorgu($tumAile),
            'kisi' => $kisiRepository->findAll(),
        ]);
    }

    /**
     * @Route("/deleteFamily/{id}", name="delete_family", methods={"GET"})
     *
     * @param FamilyLogic $familyLogic
     * @param $id
     * @param AileRepository $aileRepository
     * @return Response
     */
    public function deleteFamily(FamilyLogic $familyLogic, $id, AileRepository $aileRepository): Response
    {
        // FamilyLogic ile kişi Silme..
        $familyLogic->deleteFamily($id);

        return $this->redirectToRoute('list_family');
    }

    /**
     * @Route("/listFamily", name="list_family", methods={"GET","POST"})
     * @param AileRepository $aileRepository
     * @return Response
     */
    public function listFamily(AileRepository $aileRepository): Response
    {
        $tumAile = $aileRepository->findAll();

        return $this->render('aile/aileListe.html.twig', [
            'aile' => $aileRepository->aileIsimSorgu($tumAile),
        ]);
    }

    // Child İşlemleri

    /**
     * @Route("/newFamilyChild", name="new_family_child", methods={"GET","POST"})
     * @param Request $request
     * @param FamilyLogic $familyLogic
     * @param AileRepository $aileRepository
     * @param KisiRepository $kisiRepository
     * @return Response
     */
    public function newFamilyChild(Request $request, FamilyLogic $familyLogic, AileRepository $aileRepository, KisiRepository $kisiRepository): Response
    {
        $birinci = $request->request->get('birinci');
        $ikinci = $request->request->get('ikinci');
        // Seçilen değerin 2 side aynı olması engelleniyor.

        if ($birinci && null != $ikinci) {
            if ($birinci == $ikinci) {
                return new Response('İkiside aynı kişi !');
            }
            $sorgu = $aileRepository->kontrolSorguIki($birinci, $ikinci);

            $sorgu2 = $aileRepository->kontrolSorguUc($ikinci);

            $sorgu4 = $aileRepository->kontrolSorguDort($birinci);

            // İlişkidurumu = 1 yani Evli olmayanların Çocuk Sahiplenmesi
            // Yada Öz evlat olarak kayıt edebilmesi engelleniyor.
            foreach ($sorgu4 as $key) {
                if (1 != $key['iliskidurumu']) {
                    return new Response('Evli Olmadan Çocuk Sahiplenemezssiniz 1 !');
                }
            }
            if (null == $sorgu4) {
                return new Response('Evli Olmadan Çocuk Sahiplenemezssiniz  2!');
            }
            // Çocuk eklenmek istenilen kişi / ebevynin eşi olması durumu engellendi.
            foreach ($sorgu as $key) {
                dump($key['iliskidurumu']);
                if (1 == $key['iliskidurumu']) {
                    return new Response('Hata Seçilenler Evli !');
                }
            }
            // Seçilen Çocuğun başka bir ebevyne kayıtlıysa hata mesajı verildi.
            foreach ($sorgu2 as $key) {
                if (2 == $key['iliskidurumu']) {
                    return new Response('Bu Çocuk zaten birine kayıtlı !');
                }
            }
            if (null == $sorgu) {
                // FamilyLogic İle Kayıt İşlemi Gerçekleşiyor
                $familyLogic->addNewFamilyChild();

                return $this->redirectToRoute('list_family_child');
            }
        }

        return $this->render('aile/aileCocukEkle.html.twig', [
            'kisi' => $kisiRepository->findAll(),
        ]);
    }

    /**
     * @Route("/updateFamilyChild/{id}", name="update_family_child", methods={"GET","POST","PUT"})
     *
     * @param KisiRepository $kisiRepository
     * @param Request $request
     * @param FamilyLogic $familyLogic
     * @param $id
     * @param AileRepository $aileRepository
     * @return Response
     */
    public function updateFamilyChild(KisiRepository $kisiRepository, Request $request, FamilyLogic $familyLogic, $id, AileRepository $aileRepository): Response
    {
        $birinci = $request->request->get('birinci');
        $ikinci = $request->request->get('ikinci');
        // Seçilen değerin 2 side aynı olması engelleniyor.

        if ($birinci && null != $ikinci) {
            if ($birinci == $ikinci) {
                return new Response('İkiside aynı kişi !');
            }
            $sorgu = $aileRepository->kontrolSorguIki($birinci, $ikinci);

            $sorgu2 = $aileRepository->kontrolSorguUc($ikinci);

            $sorgu4 = $aileRepository->kontrolSorguDort($birinci);

            // İlişkidurumu = 1 yani Evli olmayanların Çocuk Sahiplenmesi
            // Yada Öz evlat olarak kayıt edebilmesi engelleniyor.
            foreach ($sorgu4 as $key) {
                if (1 != $key['iliskidurumu']) {
                    return new Response('Evli Olmadan Çocuk Sahiplenemezssiniz 1 !');
                }
            }
            if (null == $sorgu4) {
                return new Response('Evli Olmadan Çocuk Sahiplenemezssiniz  2!');
            }
            // Çocuk eklenmek istenilen kişi / ebevynin eşi olması durumu engellendi.
            foreach ($sorgu as $key) {
                dump($key['iliskidurumu']);
                if (1 == $key['iliskidurumu']) {
                    return new Response('Hata Seçilenler Evli !');
                }
            }
            // Seçilen Çocuğun başka bir ebevyne kayıtlıysa hata mesajı verildi.
            foreach ($sorgu2 as $key) {
                if ($birinci == $key['birinci_id']) {
                    // FamilyLogic İle Kayıt İşlemi Gerçekleşiyor
                    $familyLogic->updateFamilyChild($id);

                    return $this->redirectToRoute('list_family_child');
                } elseif (2 == $key['iliskidurumu']) {
                    return new Response('Bu Çocuk zaten birine kayıtlı !');
                }
            }
            if (null == $sorgu) {
                // FamilyLogic İle Kayıt İşlemi Gerçekleşiyor
                $familyLogic->updateFamilyChild($id);

                return $this->redirectToRoute('list_family_child');
            }
        }

        $tumAile = $aileRepository->find($id);

        return $this->render('aile/aileCocukGuncelle.html.twig', [
            'child' => $aileRepository->aileTekIsimSorgu($tumAile),
            'kisi' => $kisiRepository->findAll(),
        ]);
    }

    /**
     * @Route("/deleteFamilyChild/{id}", name="delete_family_child", methods={"GET"})
     *
     * @param FamilyLogic $familyLogic
     * @param $id
     * @return Response
     */
    public function deleteFamilyChild(FamilyLogic $familyLogic, $id): Response
    {
        // FamilyLogic ile çocuk Silme..
        $familyLogic->deleteFamilyChild($id);

        return $this->redirectToRoute('list_family_child');
    }

    /**
     * @Route("/listFamilyChild", name="list_family_child", methods={"GET","POST"})
     * @param AileRepository $aileRepository
     * @return Response
     */
    public function listFamilyChild(AileRepository $aileRepository): Response
    {
        $tumAile = $aileRepository->findAll();

        return $this->render('aile/aileCocukListe.html.twig', [
            'aile' => $aileRepository->cocukIsimSorgu($tumAile),
        ]);
    }
}
