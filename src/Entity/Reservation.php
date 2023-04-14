<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $startAdress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destinationAdress;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $reviews;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ratingDriver;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStartAdress(): ?string
    {
        return $this->startAdress;
    }

    public function setStartAdress(string $startAdress): self
    {
        $this->startAdress = $startAdress;

        return $this;
    }

    public function getDestinationAdress(): ?string
    {
        return $this->destinationAdress;
    }

    public function setDestinationAdress(string $destinationAdress): self
    {
        $this->destinationAdress = $destinationAdress;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getReviews(): ?string
    {
        return $this->reviews;
    }

    public function setReviews(?string $reviews): self
    {
        $this->reviews = $reviews;

        return $this;
    }

    public function getRatingDriver(): ?int
    {
        return $this->ratingDriver;
    }

    public function setRatingDriver(?int $ratingDriver): self
    {
        $this->ratingDriver = $ratingDriver;

        return $this;
    }
}
