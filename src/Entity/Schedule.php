<?php

namespace App\Entity;

use App\Repository\ScheduleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScheduleRepository::class)
 */
class Schedule
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
    private $appointment;

    /**
     * @ORM\ManyToOne(targetEntity=Doctor::class, inversedBy="schedule")
     */
    private $doctor;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="Schedule")
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAppointment(): ?\DateTimeInterface
    {
        return $this->appointment;
    }

    public function setAppointment(\DateTimeInterface $appointment): self
    {
        $this->appointment = $appointment;

        return $this;
    }

    

    public function addDoctor(Doctor $doctor): self
    {
        if (!$this->doctor->contains($doctor)) {
            $this->doctor[] = $doctor;
            $doctor->setSchedule($this);
        }

        return $this;
    }

    public function removeDoctor(Doctor $doctor): self
    {
        if ($this->doctor->removeElement($doctor)) {
            // set the owning side to null (unless already changed)
            if ($doctor->getSchedule() === $this) {
                $doctor->setSchedule(null);
            }
        }

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }
    /*
    /**
     * @return Collection|Doctor[]
     */
    /*
    public function getDoctor(): ?Collection
    {
        return $this->doctor;
    }
    */
    public function getDoctor(): ?doctor
    {
        return $this->doctor;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function __toString() {
        return $this->id;
    }

    public function setDoctor(?Doctor $doctor): self
    {
        $this->doctor = $doctor;

        return $this;
    }
}
