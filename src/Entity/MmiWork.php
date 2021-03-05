<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MmiWorkRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=MmiWorkRepository::class)
 */
class MmiWork
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $work_semester;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $work_module;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkSemester(): ?int
    {
        return $this->work_semester;
    }

    public function setWorkSemester(?int $work_semester): self
    {
        $this->work_semester = $work_semester;

        return $this;
    }

    public function getWorkModule(): ?string
    {
        return $this->work_module;
    }

    public function setWorkModule(?string $work_module): self
    {
        $this->work_module = $work_module;

        return $this;
    }
}
