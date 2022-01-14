<?php

namespace App\Entity;

use App\Repository\ComicsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ComicsRepository::class)
 */
class Comics
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
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $year;

    /**
     * @ORM\ManyToOne(targetEntity=Comics::class, inversedBy="comics")
     */
    private $ManyToOne;

    /**
     * @ORM\OneToMany(targetEntity=Comics::class, mappedBy="ManyToOne")
     */
    private $comics;

    /**
     * @ORM\ManyToOne(targetEntity=Writer::class, inversedBy="licence")
     */
    private $writer;

    /**
     * @ORM\ManyToOne(targetEntity=Licence::class, inversedBy="comics")
     */
    private $Licence;

    /**
     * @ORM\ManyToOne(targetEntity=Editor::class, inversedBy="comics")
     */
    private $editor;

    /**
     * @ORM\ManyToOne(targetEntity=Designer::class, inversedBy="comics")
     */
    private $Designer;

    public function __construct()
    {
        $this->comics = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getYear(): ?\DateTimeInterface
    {
        return $this->year;
    }

    public function setYear(\DateTimeInterface $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getManyToOne(): ?self
    {
        return $this->ManyToOne;
    }

    public function setManyToOne(?self $ManyToOne): self
    {
        $this->ManyToOne = $ManyToOne;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getComics(): Collection
    {
        return $this->comics;
    }

    public function addComic(self $comic): self
    {
        if (!$this->comics->contains($comic)) {
            $this->comics[] = $comic;
            $comic->setManyToOne($this);
        }

        return $this;
    }

    public function removeComic(self $comic): self
    {
        if ($this->comics->removeElement($comic)) {
            // set the owning side to null (unless already changed)
            if ($comic->getManyToOne() === $this) {
                $comic->setManyToOne(null);
            }
        }

        return $this;
    }

    public function getWriter(): ?Writer
    {
        return $this->writer;
    }

    public function setWriter(?Writer $writer): self
    {
        $this->writer = $writer;

        return $this;
    }

    public function getLicence(): ?Licence
    {
        return $this->Licence;
    }

    public function setLicence(?Licence $Licence): self
    {
        $this->Licence = $Licence;

        return $this;
    }

    public function getEditor(): ?Editor
    {
        return $this->editor;
    }

    public function setEditor(?Editor $editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    public function getDesigner(): ?Designer
    {
        return $this->Designer;
    }

    public function setDesigner(?Designer $Designer): self
    {
        $this->Designer = $Designer;

        return $this;
    }
}
