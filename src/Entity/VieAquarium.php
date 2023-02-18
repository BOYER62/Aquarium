<?php

namespace App\Entity;

use App\Repository\VieAquariumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VieAquariumRepository::class)
 */
class VieAquarium
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
    private $maintenance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ph;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $th;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observations;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $temperature;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nourriture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reproduction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $compatibilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $experence_de_vie;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createAt;

    /**
     * @ORM\OneToOne(targetEntity=identite::class, inversedBy="vieAquarium", cascade={"persist", "remove"})
     */
    private $identite;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPh(): ?string
    {
        return $this->ph;
    }

    public function setPh(string $ph): self
    {
        $this->ph = $ph;

        return $this;
    }

    public function getTh(): ?string
    {
        return $this->th;
    }

    public function setTh(string $th): self
    {
        $this->th = $th;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    public function getTemperature(): ?string
    {
        return $this->temperature;
    }

    public function setTemperature(string $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getEau(): ?string
    {
        return $this->eau;
    }

    public function setEau(string $eau): self
    {
        $this->eau = $eau;

        return $this;
    }

    public function getNourriture(): ?string
    {
        return $this->nourriture;
    }

    public function setNourriture(string $nourriture): self
    {
        $this->nourriture = $nourriture;

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

    public function getCompatibilite(): ?string
    {
        return $this->compatibilite;
    }

    public function setCompatibilite(string $compatibilite): self
    {
        $this->compatibilite = $compatibilite;

        return $this;
    }

    public function getExperenceDeVie(): ?string
    {
        return $this->experence_de_vie;
    }

    public function setExperenceDeVie(string $experence_de_vie): self
    {
        $this->experence_de_vie = $experence_de_vie;

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

    public function getIdentite(): ?identite
    {
        return $this->identite;
    }

    public function setIdentite(?identite $identite): self
    {
        $this->identite = $identite;

        return $this;
    }

    public function __construct()
    {
        $this->createAt = new \DateTimeImmutable('now');
    }
}
