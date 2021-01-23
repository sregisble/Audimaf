<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SubServiceRepository;

/**
 * @ORM\Entity(repositoryClass=SubServiceRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class SubService
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity=Page::class, inversedBy="subServices")
     * @ORM\JoinColumn(nullable=false)
     */
    private $page;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setSlug(): self
    {
        //Appel de slugify
        $slugify = new Slugify();
        //Création du slug
        $this->slug = $slugify->slugify($this->getName());
        //Destruction du slugify
        unset($slugify);
        return $this;
    }

    public function getPage(): ?Page
    {
        return $this->page;
    }

    public function setPage(?Page $page): self
    {
        $this->page = $page;

        return $this;
    }
}
