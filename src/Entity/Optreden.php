<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OptredenRepository")
 */
class Optreden
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Artiest")
     */
    private $artiest_id;

    /**
     * @ORM\Column(type="date")
     */
    private $Datum;

    /**
     * @ORM\Column(type="time")
     */
    private $Aanvang;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Zaal;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxSeats;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtiestId(): ?Artiest
    {
        return $this->artiest_id;
    }

    public function setArtiestId(?Artiest $artiest_id): self
    {
        $this->artiest_id = $artiest_id;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->Datum;
    }

    public function setDatum(\DateTimeInterface $Datum): self
    {
        $this->Datum = $Datum;

        return $this;
    }

    public function getAanvang(): ?\DateTimeInterface
    {
        return $this->Aanvang;
    }

    public function setAanvang(\DateTimeInterface $Aanvang): self
    {
        $this->Aanvang = $Aanvang;

        return $this;
    }

    public function getZaal(): ?string
    {
        return $this->Zaal;
    }

    public function setZaal(string $Zaal): self
    {
        $this->Zaal = $Zaal;

        return $this;
    }

    public function getMaxSeats(): ?int
    {
        return $this->maxSeats;
    }

    public function setMaxSeats(int $maxSeats): self
    {
        $this->maxSeats = $maxSeats;

        return $this;
    }

}
