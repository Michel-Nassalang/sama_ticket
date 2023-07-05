<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $statutspectateur = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $etatticket = null;

    #[ORM\Column]
    private ?int $nbtickets = null;

    #[ORM\Column(nullable: true)]
    private ?bool $disponibilite = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $positionlargeur = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $positionlongueur = null;

    #[ORM\Column(nullable: true)]
    private ?float $xlongueur = null;

    #[ORM\Column(nullable: true)]
    private ?float $ylargeur = null;

    #[ORM\Column(length: 255)]
    private ?string $imgticket = null;

    #[ORM\ManyToOne(inversedBy: 'tickets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Evenement $evenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getStatutspectateur(): ?string
    {
        return $this->statutspectateur;
    }

    public function setStatutspectateur(?string $statutspectateur): static
    {
        $this->statutspectateur = $statutspectateur;

        return $this;
    }

    public function getEtatticket(): ?string
    {
        return $this->etatticket;
    }

    public function setEtatticket(?string $etatticket): static
    {
        $this->etatticket = $etatticket;

        return $this;
    }

    public function getNbtickets(): ?int
    {
        return $this->nbtickets;
    }

    public function setNbtickets(int $nbtickets): static
    {
        $this->nbtickets = $nbtickets;

        return $this;
    }

    public function isDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(?bool $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

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

    public function getPositionlargeur(): ?string
    {
        return $this->positionlargeur;
    }

    public function setPositionlargeur(?string $positionlargeur): static
    {
        $this->positionlargeur = $positionlargeur;

        return $this;
    }

    public function getPositionlongueur(): ?string
    {
        return $this->positionlongueur;
    }

    public function setPositionlongueur(?string $positionlongueur): static
    {
        $this->positionlongueur = $positionlongueur;

        return $this;
    }

    public function getXlongueur(): ?float
    {
        return $this->xlongueur;
    }

    public function setXlongueur(?float $xlongueur): static
    {
        $this->xlongueur = $xlongueur;

        return $this;
    }

    public function getYlargeur(): ?float
    {
        return $this->ylargeur;
    }

    public function setYlargeur(?float $ylargeur): static
    {
        $this->ylargeur = $ylargeur;

        return $this;
    }

    public function getImgticket(): ?string
    {
        return $this->imgticket;
    }

    public function setImgticket(string $imgticket): static
    {
        $this->imgticket = $imgticket;

        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): static
    {
        $this->evenement = $evenement;

        return $this;
    }
}
