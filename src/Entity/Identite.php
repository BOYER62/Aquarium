<?php

namespace App\Entity;

use App\Repository\IdentiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IdentiteRepository::class)
 */
class Identite
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
    private $scientifique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commun;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $famille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $origine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $biotope_naturel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $taille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $difference_sexuelles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $comportement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $maintenance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soins;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reproduction;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createAt;

    /**
     * @ORM\OneToOne(targetEntity=VieAquarium::class, mappedBy="identite", cascade={"persist", "remove"})
     */
    private $vieAquarium;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $image1;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $image2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScientifique(): ?string
    {
        return $this->scientifique;
    }

    public function setScientifique(string $scientifique): self
    {
        $this->scientifique = $scientifique;

        return $this;
    }

    public function getCommun(): ?string
    {
        return $this->commun;
    }

    public function setCommun(string $commun): self
    {
        $this->commun = $commun;

        return $this;
    }

    public function getFamille(): ?string
    {
        return $this->famille;
    }

    public function setFamille(string $famille): self
    {
        $this->famille = $famille;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(string $origine): self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getBiotopeNaturel(): ?string
    {
        return $this->biotope_naturel;
    }

    public function setBiotopeNaturel(string $biotope_naturel): self
    {
        $this->biotope_naturel = $biotope_naturel;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getDifferenceSexuelles(): ?string
    {
        return $this->difference_sexuelles;
    }

    public function setDifferenceSexuelles(string $difference_sexuelles): self
    {
        $this->difference_sexuelles = $difference_sexuelles;

        return $this;
    }

    public function getComportement(): ?string
    {
        return $this->comportement;
    }

    public function setComportement(string $comportement): self
    {
        $this->comportement = $comportement;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getMaintenance(): ?string
    {
        return $this->maintenance;
    }

    public function setMaintenance(string $maintenance): self
    {
        $this->maintenance = $maintenance;

        return $this;
    }

    public function getSoins(): ?string
    {
        return $this->soins;
    }

    public function setSoins(string $soins): self
    {
        $this->soins = $soins;

        return $this;
    }

    public function getReproduction(): ?string
    {
        return $this->reproduction;
    }

    public function setReproduction(string $reproduction): self
    {
        $this->reproduction = $reproduction;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeImmutable $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

    public function getVieAquarium(): ?VieAquarium
    {
        return $this->vieAquarium;
    }

    public function setVieAquarium(?VieAquarium $vieAquarium): self
    {
        // unset the owning side of the relation if necessary
        if ($vieAquarium === null && $this->vieAquarium !== null) {
            $this->vieAquarium->setIdentite(null);
        }

        // set the owning side of the relation if necessary
        if ($vieAquarium !== null && $vieAquarium->getIdentite() !== $this) {
            $vieAquarium->setIdentite($this);
        }

        $this->vieAquarium = $vieAquarium;

        return $this;
    }

    public function __construct()
    {
        $this->createAt = new \DateTimeImmutable('now');
    }

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(string $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(string $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }
}
