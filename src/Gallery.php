<?php

namespace Application;

/**
 * 
 */
class Gallery
{
    /**
     * @var string 
     */
    protected string $name;

    /**
     * @var string|null 
     */
    protected ?string $description  = null;

    /**
     * @var int 
     */
    protected int $itemsPerPage = 5;

    /**
     * @var int 
     */
    protected int $page = 1;

    /**
     * @var int 
     */
    protected int $maxPages = 1;

    /**
     * @var \Application\Image[]
     */
    protected array $images = [];


    /**
     * @param int|null $page
     * @param int|null $itemsPerPage
     *
     * @return \Application\Image[]
     */
    public function getPagedImages(?int $page = null, ?int $itemsPerPage = null): array
    {
        if (null === $page) {
            $page = $this->getPage();
        }
        if (null === $itemsPerPage) {
            $itemsPerPage = $this->getItemsPerPage();
        }
        return array_slice($this->images, $page * $itemsPerPage, $itemsPerPage);
    }


    /**
     * @return \Application\Image[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param \Application\Image $image
     *
     * @return \Application\Gallery
     */
    public function addImage(Image $image): Gallery
    {
        $this->images[$image->getPosition()] = $image;
        return $this;
    }


    /**
     * @param \Application\Image[] $images
     *
     * @return \Application\Gallery
     */
    public function addImages(array $images): Gallery
    {
        foreach ($images as $image) {
            $this->addImage($image);
        }
        return  $this;
    }


    /**
     * @return \Application\Gallery
     */
    public function clearImages(): Gallery
    {
        $this->images = [];
        return $this;
    }


    /**
     * @param \Application\Image[] $images
     *
     * @return \Application\Gallery
     */
    public function setImages(array $images): Gallery
    {
        return  $this
            ->clearImages()
            ->addImages($images);
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @param string $name
     *
     * @return Gallery
     */
    public function setName(string $name): Gallery
    {
        $this->name = $name;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }


    /**
     * @param string|null $description
     *
     * @return Gallery
     */
    public function setDescription(?string $description): Gallery
    {
        $this->description = $description;

        return $this;
    }


    /**
     * @return int
     */
    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }


    /**
     * @param int $itemsPerPage
     *
     * @return Gallery
     */
    public function setItemsPerPage(int $itemsPerPage): Gallery
    {
        $this->itemsPerPage = $itemsPerPage;

        return $this;
    }


    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }


    /**
     * @param int $page
     *
     * @return Gallery
     */
    public function setPage(int $page): Gallery
    {
        $this->page = $page;

        return $this;
    }


    /**
     * @return int
     */
    public function getMaxPages(): int
    {
        return $this->maxPages;
    }


    /**
     * @param int $maxPages
     *
     * @return Gallery
     */
    public function setMaxPages(int $maxPages): Gallery
    {
        $this->maxPages = $maxPages;

        return $this;
    }
}