<?php

namespace App\Entity;

use App\Repository\WriterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WriterRepository::class)
 */
class Writer
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
    private $country;

    /**
     * @ORM\OneToMany(targetEntity=Comics::class, mappedBy="writer")
     */
    private $licence;

    public function __construct()
    {
        $this->licence = new ArrayCollection();
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

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Collection|Comics[]
     */
    public function getLicence(): Collection
    {
        return $this->licence;
    }

    public function addLicence(Comics $licence): self
    {
        if (!$this->licence->contains($licence)) {
            $this->licence[] = $licence;
            $licence->setWriter($this);
        }

        return $this;
    }

    public function removeLicence(Comics $licence): self
    {
        if ($this->licence->removeElement($licence)) {
            // set the owning side to null (unless already changed)
            if ($licence->getWriter() === $this) {
                $licence->setWriter(null);
            }
        }

        return $this;
    }

}
