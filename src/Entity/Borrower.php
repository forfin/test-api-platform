<?php
/**
 * test-api-platform
 * User: poraphitchuesook
 * Date: 2019-01-25
 * Time: 15:05
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Borrower
 * @package App\Entity
 * @ORM\Entity
 */
class Borrower
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
    private $name;

    /**
     * @ORM\Column
     * @var string|null
     */
    private $address;

    /**
     * @ORM\Column
     * @var string|null
     */
    private $postalNo;

    /**
     * @ORM\Column
     * @var string|null
     */
    private $city;

    /**
     * @ORM\Column
     * @var string|null
     */
    private $email;

    /**
     * @ORM\Column
     * @var string|null
     */
    private $phoneNo;

    /**
     * @ORM\OneToMany(targetEntity="Loan", mappedBy="borrower", cascade={"persist"})
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
    public function setId(?string $id): Borrower
    {
        $this->id = $id;
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
    public function setName(?string $name): Borrower
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return $this
     */
    public function setAddress(?string $address): Borrower
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostalNo(): ?string
    {
        return $this->postalNo;
    }

    /**
     * @param string|null $postalNo
     * @return $this
     */
    public function setPostalNo(?string $postalNo): Borrower
    {
        $this->postalNo = $postalNo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return $this
     */
    public function setCity(?string $city): Borrower
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return $this
     */
    public function setEmail(?string $email): Borrower
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNo(): ?string
    {
        return $this->phoneNo;
    }

    /**
     * @param string|null $phoneNo
     * @return $this
     */
    public function setPhoneNo(?string $phoneNo): Borrower
    {
        $this->phoneNo = $phoneNo;
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
    public function setLoans($loans): Borrower
    {
        $this->loans = $loans;
        return $this;
    }



    public function addLoan(Loan $loan): Borrower
    {
        $loan->setBorrower($this);
        $this->loans->add($loan);
        return $this;
    }

    public function removeLoan(Loan $loan): Borrower
    {
        $loan->setBorrower(null);
        $this->loans->removeElement($loan);
        return $this;
    }

}