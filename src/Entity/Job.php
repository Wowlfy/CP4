<?php

namespace App\Entity;

use App\Entity\Company;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\JobRepository;
use Symfony\Component\Validator\Constraints as Assert;
use DateTimeInterface;

/**
 * @ORM\Entity(repositoryClass=JobRepository::class)
 */
class Job
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez remplir ce champ s'il vous plait")
     * @Assert\Length(max=255,
     * maxMessage = "Le nom du poste ne peut pas dépasser {{ limit }} caractères")
     */
    private ?string $post;

    /**
     * @ORM\Column(type="date")
     */
    private ?DateTimeInterface $registeredAt;

    /**
     * @ORM\Column(type="date")
     */
    private ?DateTimeInterface $startAt;

    /**
     * @ORM\Column(type="date")
     */
    private ?DateTimeInterface $endAt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez remplir ce champ s'il vous plait")
     * @Assert\Length(
     * max=255,
     * maxMessage = "Le nom de la ville ne peut pas dépasser {{ limit }} caractères")
     */
    private ?string $city;

    /**
     * @ORM\ManyToOne(targetEntity=StudyField::class, inversedBy="jobs")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?StudyField $studyField;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPost(): ?string
    {
        return $this->post;
    }

    public function setPost(?string $post): self
    {
        $this->post = $post;

        return $this;
    }

    public function getRegisteredAt(): ?DateTimeInterface
    {
        return $this->registeredAt;
    }

    public function setRegisteredAt(?DateTimeInterface $registeredAt): self
    {
        $this->registeredAt = $registeredAt;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStudyField(): ?StudyField
    {
        return $this->studyField;
    }

    public function setStudyField(?StudyField $studyField): self
    {
        $this->studyField = $studyField;

        return $this;
    }
}
