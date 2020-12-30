<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PromotionRepository::class)
 */
class Promotion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $anneeDeDebut;

    /**
     * @ORM\Column(type="integer")
     */
    private $anneePromotion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lsEtudiants;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnneeDeDebut(): ?int
    {
        return $this->anneeDeDebut;
    }

    public function setAnneeDeDebut(int $anneeDeDebut): self
    {
        $this->anneeDeDebut = $anneeDeDebut;

        return $this;
    }

    public function getAnneePromotion(): ?int
    {
        return $this->anneePromotion;
    }

    public function setAnneePromotion(int $anneePromotion): self
    {
        $this->anneePromotion = $anneePromotion;

        return $this;
    }

    public function getLsEtudiants(): ?string
    {
        return $this->lsEtudiants;
    }

    public function setLsEtudiants(string $lsEtudiants): self
    {
        $this->lsEtudiants = $lsEtudiants;

        return $this;
    }
}
