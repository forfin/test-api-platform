<?php
/**
 * test-api-platform
 * User: poraphitchuesook
 * Date: 2019-01-25
 * Time: 13:43
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class Book
 * @package App\Entity
 * @ORM\Entity
 * @ApiResource(
 *     collectionOperations={"get"={"method"="GET"}},
 *     itemOperations={"get"={"method"="GET"}}
 * )
 */
class Book
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var string|null
     */
    private $id;

    /**
     * @ORM\Column
     * @var string|null
     */
    private $title;

    /**
     * @ORM\Column
     * @var string|null
     */
    private $isbn;

    /**
     * @ORM\Column
     * @var string|null
     */
    private $description;

    /**
     * @ORM\Column
     * @var int|null
     */
    private $publishedYear;

    /**
     * @ORM\OneToMany(targetEntity="Loan", mappedBy="book", cascade={"persist"})
     * @var Loan[]
     */
    private $loans;

    public function __construct()
    {
        $this->loans = new ArrayCollection();
    }

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
    public function setId(?string $id): Book
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
    public function setTitle(?string $title): Book
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
    public function setIsbn(?string $isbn): Book
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
    public function setDescription(?string $description): Book
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
    public function setPublishedYear(?int $publishedYear): Book
    {
        $this->publishedYear = $publishedYear;
        return $this;
    }

    /**
     * @return Loan[]
     */
    public function getLoans()
    {
        return $this->loans;
    }

    /**
     * @param Loan[] $loans
     * @return $this
     */
    public function setLoans($loans): Book
    {
        $this->loans = $loans;
        return $this;
    }

    public function addLoan(Loan $loan): Book
    {
        $loan->setBook($this);
        $this->loans->add($loan);
        return $this;
    }

    public function removeLoan(Loan $loan): Book
    {
        $loan->setBook(null);
        $this->loans->removeElement($loan);
        return $this;
    }


}