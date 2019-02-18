<?php
/**
 * test-api-platform
 * User: poraphitchuesook
 * Date: 2019-02-18
 * Time: 14:52
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class File
 * @package App\Entity
 * @ORM\Entity
 */
class File
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int|null
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string|null
     */
    private $type;

    /**
     * @ORM\Column(type="string")
     * @var string|null
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     * @var int|null
     */
    private $size;

    /**
     * @ORM\Column(type="string")
     * @var string|null
     */
    private $path;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return $this
     */
    public function setId(?int $id): File
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(?string $type): File
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(?string $name): File
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int|null $size
     * @return $this
     */
    public function setSize(?int $size): File
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     * @return $this
     */
    public function setPath(?string $path): File
    {
        $this->path = $path;
        return $this;
    }
}