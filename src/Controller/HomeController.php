<?php

namespace App\Controller;

use App\Repository\AileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    //Burada $aileRepository->fetchAll() gibi kendi fonksiyonumu çağırıp
    // onu bir değişkene atayıp örneğin $tumVeri burada $tumVeri->getIsim gibi nasıl çekerim ?
    // $aileRepository->cocukEbeveynListele(); burdan ->getIsim gibi gelmiyor !
    /**
     * @Route("/", name="home_index", methods={"GET"})
     * @param AileRepository $aileRepository
     * @return Response
     */
    public function familyShow(AileRepository $aileRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        // Çocukları listelemek için Aile tablosunda
        // iliskıdurumu=2 olanların birinci_id 'lerini
        // yani ebeveyn id lerini ulaşıyorum.
        $sorgu = $aileRepository->cocukEbeveynListele();

        // Ailedeki birinci ve ikinci id li kişilerin isimlerini alma
        foreach ($sorgu as $item) {
            $birinci = $item['birinci_id'];
            $ikinci = $item['ikinci_id'];

            // Birinci Ebeveyn İsmi Bulunuyor
            $sorguBirinciEbeveyn = $aileRepository->birinciEbeveynIsmi($birinci);
            // İkinci Ebeveyn İsmi Bulunuyor
            $sorguIkinciEbeveyn = $aileRepository->ikinciEbeveynIsmi($ikinci);
            foreach ($sorguBirinciEbeveyn as $item10) {
                foreach ($sorguIkinciEbeveyn as $item11) {
                    // Ebeveynler İsimleri İle Birlikte Oluşturuluyor.

                    $test = [
                        'id' => $item['id'],
                        'birinci_isim' => $item10['isim'],
                        'birinci_soyisim' => $item10['soyisim'],
                        'birinci_cinsiyet' => $item10['cinsiyet'],
                        'ikinci_isim' => $item11['isim'],
                        'ikinci_soyisim' => $item11['soyisim'],
                        'ikinci_cinsiyet' => $item11['cinsiyet'],
                        'birinci_id' => $item10['id'],
                        'ikinci_id' => $item11['id'],
                        'iliskidurumu' => $item['iliskidurumu'],
                        'cocukdurumu' => $item['cocukdurumu'],
                    ];

                    $ebeveynler[] = $test;
                }
            }
        }

        // isim alma bitiş
        foreach ($sorgu as $key) {
            $birinci = $key['birinci_id'];
            $ikinci = $key['ikinci_id'];
            // Aile tablosunda iliskidurumu=1 yani evli olanları listeliyor
            $evliolanlar = $aileRepository->evlileriListele($birinci, $ikinci);
            $dataevliolanlar[] = $evliolanlar;
        }

        if (null == $sorgu) {
            return new Response('Evli Birey Bulunamadı');
        }

        return $this->render('home.html.twig', [
            'sorgu' => $ebeveynler,
            'sorguter' => $dataevliolanlar,
        ]);

    }
}
