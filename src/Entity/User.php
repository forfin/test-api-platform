<?php
/**
 * test-api-platform
 * User: poraphitchuesook
 * Date: 2019-01-29
 * Time: 13:27
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class User
 * @package App\Entity
 * @ORM\Entity
 * @ApiResource
 */
class User
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
     * @ORM\Column(type="json_array")
     * @var string[]|null
     */
    private $allowedResources;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->allowedResources = new ArrayCollection();
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
    public function setId(?string $id): User
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
    public function setName(?string $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAllowedResources(): ?array
    {
        return $this->allowedResources;
    }

    /**
     * @param string[]|null $allowedResources
     * @return $this
     */
    public function setAllowedResources(?array $allowedResources): User
    {
        $this->allowedResources = $allowedResources;
        return $this;
    }


}