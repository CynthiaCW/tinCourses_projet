<?php

namespace App\Entity;

use App\Repository\InfosArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfosArticleRepository::class)]
class InfosArticle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\Column(type: 'integer')]
    private $poids;

    #[ORM\Column(type: 'integer')]
    private $saison;

    #[ORM\Column(type: 'integer')]
    private $nutriscore;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getSaison(): ?int
    {
        return $this->saison;
    }

    public function setSaison(int $saison): self
    {
        $this->saison = $saison;

        return $this;
    }

    public function getNutriscore(): ?int
    {
        return $this->nutriscore;
    }

    public function setNutriscore(int $nutriscore): self
    {
        $this->nutriscore = $nutriscore;

        return $this;
    }
}
