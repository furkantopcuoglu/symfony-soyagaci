<?php

namespace App\Repository;

use App\Entity\Aile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Aile|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aile|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aile[]    findAll()
 * @method Aile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aile::class);
    }

    // /**
    //  * @return Aile[] Returns an array of Aile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Aile
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function kontrolSorgu($birinci, $ikinci): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT iliskidurumu FROM aile where birinci_id in (:birinci,:ikinci) or ikinci_id in (:birinci,:ikinci) order by iliskidurumu asc';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['birinci' => $birinci, 'ikinci' => $ikinci]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function kontrolSorguIki($birinci, $ikinci): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT iliskidurumu FROM aile where birinci_id in (:birinci,:ikinci) and ikinci_id in (:birinci,:ikinci)';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['birinci' => $birinci, 'ikinci' => $ikinci]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function kontrolSorguUc($ikinci): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT iliskidurumu,birinci_id FROM aile where ikinci_id=:ikinci';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['ikinci' => $ikinci]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function kontrolSorguDort($birinci): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT iliskidurumu FROM aile where iliskidurumu=1 and birinci_id in (:birinci) or ikinci_id in (:birinci) order by iliskidurumu asc LIMIT 1';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['birinci' => $birinci]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function evlileriListele($birinci, $ikinci): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT aile.birinci_id, kisi.isim ,kisi.soyisim, kisi.cinsiyet, aile.cocukdurumu FROM aile INNER JOIN kisi on aile.ikinci_id=kisi.id where birinci_id in (:birinci,:ikinci) and iliskidurumu=2 order by birinci_id asc';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['birinci' => $birinci, 'ikinci' => $ikinci]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function cocukEbeveynListele(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT * FROM `aile` where iliskidurumu=1 order by birinci_id asc';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function birinciEbeveynIsmi($birinci): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT * FROM `kisi` where id=:birinci';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['birinci' => $birinci]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function ikinciEbeveynIsmi($ikinci): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT * FROM `kisi` where id=:ikinci';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['ikinci' => $ikinci]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function aileIsimSorgu($tumAile): array
    {
        foreach ($tumAile as $key) {
            $verilerarray = [
                'id' => $key->getId(),
                'birinci' => $key->getBirinci()->getIsim(),
                'ikinci' => $key->getIkinci()->getIsim(),
                'iliskidurumu' => $key->getIliskidurumu(),
                'cocukdurumu' => $key->getCocukdurumu(),
            ];

            $data[] = $verilerarray;
        }

        return $data;
    }

    public function aileTekIsimSorgu($tumAile): array
    {
        while ($tumAile) {
            $verilerarray = [
                'id' => $tumAile->getId(),
                'birinci' => $tumAile->getBirinci()->getId(),
                'ikinci' => $tumAile->getIkinci()->getId(),
                'iliskidurumu' => $tumAile->getIliskidurumu(),
                'cocukdurumu' => $tumAile->getCocukdurumu(),
            ];

            return $verilerarray;
        }
    }

    public function cocukIsimSorgu($tumAile): array
    {
        foreach ($tumAile as $key) {
            if (2 == $key->getIliskidurumu()) {
                $verilerarray = [
                'id' => $key->getId(),
                'birinci' => $key->getBirinci()->getIsim(),
                'ikinci' => $key->getIkinci()->getIsim(),
                'iliskidurumu' => $key->getIliskidurumu(),
                'cocukdurumu' => $key->getCocukdurumu(),
            ];
                $data[] = $verilerarray;
            }
        }

        return $data;
    }
}
