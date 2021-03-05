<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProjectInterfaceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ProjectInterfaceRepository::class)
 */
class ProjectInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $proj_int_year;

    /**
     * @ORM\Column(type="text")
     */
    private $proj_int_url;

    /**
     * @ORM\Column(type="integer")
     */
    private $workType;

    /**
     * @ORM\Column(type="integer")
     */
    private $project_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $proj_int_titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $proj_int_desc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjIntYear(): ?\DateTimeInterface
    {
        return $this->proj_int_year;
    }

    public function setProjIntYear(?\DateTimeInterface $proj_int_year): self
    {
        $this->proj_int_year = $proj_int_year;

        return $this;
    }

    public function getProjIntUrl(): ?string
    {
        return $this->proj_int_url;
    }

    public function setProjIntUrl(string $proj_int_url): self
    {
        $this->proj_int_url = $proj_int_url;

        return $this;
    }

    public function getWorkType(): ?int
    {
        return $this->workType;
    }

    public function setWorkType(int $workType): self
    {
        $this->workType = $workType;

        return $this;
    }

    public function getProjectId(): ?int
    {
        return $this->project_id;
    }

    public function setProjectId(int $project_id): self
    {
        $this->project_id = $project_id;

        return $this;
    }

    public function getProjIntTitre(): ?string
    {
        return $this->proj_int_titre;
    }

    public function setProjIntTitre(string $proj_int_titre): self
    {
        $this->proj_int_titre = $proj_int_titre;

        return $this;
    }

    public function getProjIntDesc(): ?string
    {
        return $this->proj_int_desc;
    }

    public function setProjIntDesc(?string $proj_int_desc): self
    {
        $this->proj_int_desc = $proj_int_desc;

        return $this;
    }
}
