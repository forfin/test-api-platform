<?php
/**
 * test-api-platform
 * User: poraphitchuesook
 * Date: 2019-01-25
 * Time: 15:11
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Loan
 * @package App\Entity
 * @ORM\Entity
 */
class Loan
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var string|null
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime|null
     */
    private $loanDate;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime|null
     */
    private $returnDate;

    /**
     * @ORM\ManyToOne(targetEntity="Book", inversedBy="loans")
     * @var Book|null
     */
    private $book;

    /**
     * @ORM\ManyToOne(targetEntity="Borrower", inversedBy="loans")
     * @var Borrower|null
     */
    private $borrower;

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
    public function setId(?string $id): Loan
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLoanDate(): ?\DateTime
    {
        return $this->loanDate;
    }

    /**
     * @param \DateTime|null $loanDate
     * @return $this
     */
    public function setLoanDate(?\DateTime $loanDate): Loan
    {
        $this->loanDate = $loanDate;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getReturnDate(): ?\DateTime
    {
        return $this->returnDate;
    }

    /**
     * @param \DateTime|null $returnDate
     * @return $this
     */
    public function setReturnDate(?\DateTime $returnDate): Loan
    {
        $this->returnDate = $returnDate;
        return $this;
    }

    /**
     * @return Book|null
     */
    public function getBook(): ?Book
    {
        return $this->book;
    }

    /**
     * @param Book|null $book
     * @return $this
     */
    public function setBook(?Book $book): Loan
    {
        $this->book = $book;
        return $this;
    }

    /**
     * @return Borrower|null
     */
    public function getBorrower(): ?Borrower
    {
        return $this->borrower;
    }

    /**
     * @param Borrower|null $borrower
     * @return $this
     */
    public function setBorrower(?Borrower $borrower): Loan
    {
        $this->borrower = $borrower;
        return $this;
    }

}