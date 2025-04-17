<?php

namespace App\Entity;

use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagRepository::class)]
class Tag
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Blog::class, inversedBy: 'tags')]
    private Collection $blog;

    public function __construct()
    {
        $this->blog = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getBlog(): Collection
    {
        return $this->blog;
    }

    public function addBlog(Blog $blog): static
    {
        if (!$this->blog->contains($blog)) {
            $this->blog->add($blog);
        }

        return $this;
    }

    public function removeBlog(Blog $blog): static
    {
        $this->blog->removeElement($blog);

        return $this;
    }
}
