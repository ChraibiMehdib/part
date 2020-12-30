<?php

namespace App\Entity;

use App\Repository\CvRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CvRepository::class)
 */
class Cv
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $addresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $lsExperiencePro;

    /**
     * @ORM\Column(type="integer")
     */
    private $lsFormation;

    /**
     * @ORM\Column(type="integer")
     */
    private $lsCompetences;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lsLangues;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAddresse(): ?string
    {
        return $this->addresse;
    }

    public function setAddresse(string $addresse): self
    {
        $this->addresse = $addresse;

        return $this;
    }

    public function getLsExperiencePro(): ?int
    {
        return $this->lsExperiencePro;
    }

    public function setLsExperiencePro(int $lsExperiencePro): self
    {
        $this->lsExperiencePro = $lsExperiencePro;

        return $this;
    }

    public function getLsFormation(): ?int
    {
        return $this->lsFormation;
    }

    public function setLsFormation(int $lsFormation): self
    {
        $this->lsFormation = $lsFormation;

        return $this;
    }

    public function getLsCompetences(): ?int
    {
        return $this->lsCompetences;
    }

    public function setLsCompetences(int $lsCompetences): self
    {
        $this->lsCompetences = $lsCompetences;

        return $this;
    }

    public function getLsLangues(): ?string
    {
        return $this->lsLangues;
    }

    public function setLsLangues(string $lsLangues): self
    {
        $this->lsLangues = $lsLangues;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }
}
