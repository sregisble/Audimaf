<?php

namespace App\Entity;

use App\Repository\PageRepository;
use Cocur\Slugify\Slugify;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PageRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Page
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
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\ManyToMany(targetEntity=PageCategory::class, inversedBy="pages")
     */
    private $category;

    /**
     * @ORM\Column(type="text")
     */
    private $resume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $icon;

    /**
     * @ORM\OneToMany(targetEntity=SubService::class, mappedBy="page")
     */
    private $subServices;

    public function __construct()
    {
        $this->category = new ArrayCollection();
        $this->subServices = new ArrayCollection();
    }

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return Collection|PageCategory[]
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(PageCategory $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category[] = $category;
        }

        return $this;
    }

    public function removeCategory(PageCategory $category): self
    {
        $this->category->removeElement($category);

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return Collection|SubService[]
     */
    public function getSubServices(): Collection
    {
        return $this->subServices;
    }

    public function addSubService(SubService $subService): self
    {
        if (!$this->subServices->contains($subService)) {
            $this->subServices[] = $subService;
            $subService->setPage($this);
        }

        return $this;
    }

    public function removeSubService(SubService $subService): self
    {
        if ($this->subServices->removeElement($subService)) {
            // set the owning side to null (unless already changed)
            if ($subService->getPage() === $this) {
                $subService->setPage(null);
            }
        }

        return $this;
    }
}
