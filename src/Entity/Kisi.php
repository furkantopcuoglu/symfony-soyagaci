<?php

namespace App\Entity;

use App\Repository\KisiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KisiRepository::class)
 */
class Kisi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $isim;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $soyisim;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cinsiyet;

    /**
     * @ORM\OneToMany(targetEntity=Aile::class, mappedBy="birinci")
     */
    private $ailesbirinci;

    /**
     * @ORM\OneToMany(targetEntity=Aile::class, mappedBy="ikinci")
     */
    private $ailesikinci;

    public function __construct()
    {
        $this->ailesbirinci = new ArrayCollection();
        $this->ailesikinci = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsim(): ?string
    {
        return $this->isim;
    }

    public function setIsim(?string $isim): self
    {
        $this->isim = $isim;

        return $this;
    }

    public function getSoyisim(): ?string
    {
        return $this->soyisim;
    }

    public function setSoyisim(?string $soyisim): self
    {
        $this->soyisim = $soyisim;

        return $this;
    }

    public function getCinsiyet(): ?string
    {
        return $this->cinsiyet;
    }

    public function setCinsiyet(?string $cinsiyet): self
    {
        $this->cinsiyet = $cinsiyet;

        return $this;
    }

    /**
     * @return Collection|Aile[]
     */
    public function getAilesbirinci(): Collection
    {
        return $this->ailesbirinci;
    }

    public function addAilesbirinci(Aile $ailesbirinci): self
    {
        if (!$this->ailesbirinci->contains($ailesbirinci)) {
            $this->ailesbirinci[] = $ailesbirinci;
            $ailesbirinci->setBirinci($this);
        }

        return $this;
    }

    public function removeAilesbirinci(Aile $ailesbirinci): self
    {
        if ($this->ailesbirinci->contains($ailesbirinci)) {
            $this->ailesbirinci->removeElement($ailesbirinci);
            // set the owning side to null (unless already changed)
            if ($ailesbirinci->getBirinci() === $this) {
                $ailesbirinci->setBirinci(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Aile[]
     */
    public function getAilesikinci(): Collection
    {
        return $this->ailesikinci;
    }

    public function addAilesikinci(Aile $ailesikinci): self
    {
        if (!$this->ailesikinci->contains($ailesikinci)) {
            $this->ailesikinci[] = $ailesikinci;
            $ailesikinci->setIkinci($this);
        }

        return $this;
    }

    public function removeAilesikinci(Aile $ailesikinci): self
    {
        if ($this->ailesikinci->contains($ailesikinci)) {
            $this->ailesikinci->removeElement($ailesikinci);
            // set the owning side to null (unless already changed)
            if ($ailesikinci->getIkinci() === $this) {
                $ailesikinci->setIkinci(null);
            }
        }

        return $this;
    }
}
