<?php
/**
 * test-api-platform
 * User: poraphitchuesook
 * Date: 2019-01-28
 * Time: 12:57
 */

namespace App\API;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     collectionOperations={
 *     "post"={
 *      "method"="POST",
 *      "path"="/books"
 *     }},
 *     itemOperations={
 *      "delete"={
 *       "method"="DELETE",
 *       "path"="/books"
 *     },
 *       "put"={
 *       "method"="PUT",
 *       "path"="/books"
 *     }},
 *     attributes={
 *          "normalization_context"={"groups"={"output"}},
 *          "denormalization_context"={"groups"={"input"}},
 *      }
 * )
 */
class BookCommand
{

    /**
     * @var string|null
     * @Groups({"output"})
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @Groups({"input", "output"})
     * @var string|null
     */
    private $title;

    /**
     * @Assert\NotBlank()
     * @Groups({"input", "output"})
     * @var string|null
     */
    private $isbn;

    /**
     * @Assert\NotBlank()
     * @Groups({"input", "output"})
     * @var string|null
     */
    private $description;

    /**
     * @Assert\NotBlank()
     * @Groups({"input", "output"})
     * @var int|null
     */
    private $publishedYear;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     * @return $this
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * @param string|null $isbn
     * @return $this
     */
    public function setIsbn(?string $isbn): self
    {
        $this->isbn = $isbn;
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
     * @return $this
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPublishedYear(): ?int
    {
        return $this->publishedYear;
    }

    /**
     * @param int|null $publishedYear
     * @return $this
     */
    public function setPublishedYear(?int $publishedYear): self
    {
        $this->publishedYear = $publishedYear;
        return $this;
    }
}