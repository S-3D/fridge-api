<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Expr\Cast\Array_;
use Symfony\Component\Validator\Constraints\Json;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageUrl = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $duree = null;

    #[ORM\Column(nullable: true)]
    private ?bool $midi = null;

    #[ORM\Column(nullable: true)]
    private ?bool $soir = null;

    #[ORM\Column(nullable: true)]
    private ?bool $semaine = null;

    #[ORM\Column(nullable: true)]
    private ?bool $weekend = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $ingredients = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): static
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function isMidi(): ?bool
    {
        return $this->midi;
    }

    public function setMidi(?bool $midi): static
    {
        $this->midi = $midi;

        return $this;
    }

    public function isSoir(): ?bool
    {
        return $this->soir;
    }

    public function setSoir(?bool $soir): static
    {
        $this->soir = $soir;

        return $this;
    }

    public function isSemaine(): ?bool
    {
        return $this->semaine;
    }

    public function setSemaine(?bool $semaine): static
    {
        $this->semaine = $semaine;

        return $this;
    }

    public function isWeekend(): ?bool
    {
        return $this->weekend;
    }

    public function setWeekend(?bool $weekend): static
    {
        $this->weekend = $weekend;

        return $this;
    }

    public function getIngredients(): ?array
    {
        return $this->ingredients;
    }

    public function setIngredients(?array $ingredients): static
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}
