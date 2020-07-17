<?php

namespace App\Service;

use App\Repository\AileRepository;
use Doctrine\DBAL\DBALException;

class FamilyService
{
    /**
     * @param AileRepository $aileRepository
     * @param $birinci
     * @param $ikinci
     *
     * @return array
     *
     * @throws DBALException
     */
    public function newFamilyAddControll($birinci, $ikinci, $aileRepository)
    {
        if ($birinci && null != $ikinci) {
            if ($birinci == $ikinci) {
                return ['Hata Seçilenler Aynı', false];
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
                    return ['Hata Seçilenler Evli', false];
                }
                if (2 == $key['iliskidurumu']) {
                    // Return True gönderiyorum ve ekleme işleminin yapılabilir
                    // olduğunu söylüyorum.
                    // Controller kısmında servisim true değeri dönerse
                    // Logic ile kayıt işlemini yapıyorum.
                    return ['', true];
                }
            }
            if (null == $sorgu) {
                // Return True gönderiyorum ve ekleme işleminin yapılabilir
                // olduğunu söylüyorum.
                // Controller kısmında servisim true değeri dönerse
                // Logic ile kayıt işlemini yapıyorum.
                return ['', true];
            }
        }
    }
}
