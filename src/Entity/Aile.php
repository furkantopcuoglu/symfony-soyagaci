<?php

namespace App\Entity;

use App\Repository\AileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AileRepository::class)
 */
class Aile
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Kisi::class, inversedBy="ailesbirinci")
     */
    private $birinci;

    /**
     * @ORM\ManyToOne(targetEntity=Kisi::class, inversedBy="ailesikinci")
     */
    private $ikinci;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $iliskidurumu;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocukdurumu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBirinci(): ?Kisi
    {
        return $this->birinci;
    }

    public function setBirinci(?Kisi $birinci): self
    {
        $this->birinci = $birinci;

        return $this;
    }

    public function getIkinci(): ?Kisi
    {
        return $this->ikinci;
    }

    public function setIkinci(?Kisi $ikinci): self
    {
        $this->ikinci = $ikinci;

        return $this;
    }

    public function getIliskidurumu(): ?int
    {
        return $this->iliskidurumu;
    }

    public function setIliskidurumu(?int $iliskidurumu): self
    {
        $this->iliskidurumu = $iliskidurumu;

        return $this;
    }

    public function getCocukdurumu(): ?int
    {
        return $this->cocukdurumu;
    }

    public function setCocukdurumu(?int $cocukdurumu): self
    {
        $this->cocukdurumu = $cocukdurumu;

        return $this;
    }
}
