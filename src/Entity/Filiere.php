<?php

namespace App\Entity;

use App\Repository\FiliereRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FiliereRepository::class)
 */
class Filiere
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomFiliere;

    /**
     * @ORM\Column(type="integer")
     */
    private $lsPromotion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFiliere(): ?string
    {
        return $this->nomFiliere;
    }

    public function setNomFiliere(string $nomFiliere): self
    {
        $this->nomFiliere = $nomFiliere;

        return $this;
    }

    public function getLsPromotion(): ?int
    {
        return $this->lsPromotion;
    }

    public function setLsPromotion(int $lsPromotion): self
    {
        $this->lsPromotion = $lsPromotion;

        return $this;
    }
}
