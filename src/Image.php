<?php

namespace Application;

class Image
{
    /**
     * @var int
     */
    protected int $position;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string|null
     */
    protected ?string $description = null;

    /**
     * @var string
     */
    protected string $path;

    /**
     * @var string
     */
    protected string $thumbnailPath;

    /**
     * @var int
     */
    protected int $width;

    /**
     * @var int
     */
    protected int $height;

    /**
     * @var \DateTime
     */
    protected \DateTime $created;

    /**
     * @var bool
     */
    protected bool $visible = true;


    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }


    /**
     * @param int $position
     *
     * @return Image
     */
    public function setPosition(int $position): Image
    {
        $this->position = $position;

        return $this;
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
     * @return Image
     */
    public function setName(string $name): Image
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
     * @return Image
     */
    public function setDescription(?string $description): Image
    {
        $this->description = $description;

        return $this;
    }


    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }


    /**
     * @param string $path
     *
     * @return Image
     */
    public function setPath(string $path): Image
    {
        $this->path = $path;

        return $this;
    }


    /**
     * @return string
     */
    public function getThumbnailPath(): string
    {
        return $this->thumbnailPath;
    }


    /**
     * @param string $thumbnailPath
     *
     * @return Image
     */
    public function setThumbnailPath(string $thumbnailPath): Image
    {
        $this->thumbnailPath = $thumbnailPath;

        return $this;
    }


    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }


    /**
     * @param int $width
     *
     * @return Image
     */
    public function setWidth(int $width): Image
    {
        $this->width = $width;

        return $this;
    }


    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }


    /**
     * @param int $height
     *
     * @return Image
     */
    public function setHeight(int $height): Image
    {
        $this->height = $height;

        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }


    /**
     * @param \DateTime $created
     *
     * @return Image
     */
    public function setCreated(\DateTime $created): Image
    {
        $this->created = $created;

        return $this;
    }


    /**
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->visible;
    }


    /**
     * @param bool $visible
     *
     * @return Image
     */
    public function setVisible(bool $visible): Image
    {
        $this->visible = $visible;

        return $this;
    }
}