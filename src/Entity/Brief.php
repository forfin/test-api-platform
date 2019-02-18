<?php
/**
 * test-api-platform
 * User: poraphitchuesook
 * Date: 2019-02-18
 * Time: 15:04
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Brief
 * @package App\Entity
 * @ORM\Entity
 */
class Brief
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int|null
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="File")
     * @ORM\JoinTable(
     *     name="briefs_files_content",
     *     joinColumns={@ORM\JoinColumn(name="brief_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="file_id", referencedColumnName="id")}
     * )
     * @var File[]|ArrayCollection
     */
    private $contentFiles;

    /**
     * @ORM\ManyToMany(targetEntity="File")
     * @ORM\JoinTable(
     *     name="briefs_files_photo",
     *     joinColumns={@ORM\JoinColumn(name="brief_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="file_id", referencedColumnName="id")}
     * )
     * @var File[]|ArrayCollection
     */
    private $photoFiles;

    /**
     * @ORM\ManyToMany(targetEntity="File")
     * @ORM\JoinTable(
     *     name="briefs_files_logo",
     *     joinColumns={@ORM\JoinColumn(name="brief_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="file_id", referencedColumnName="id")}
     * )
     * @var File[]|ArrayCollection
     */
    private $logoFiles;

    /**
     * @ORM\ManyToMany(targetEntity="File")
     * @ORM\JoinTable(
     *     name="briefs_files_reference",
     *     joinColumns={@ORM\JoinColumn(name="brief_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="file_id", referencedColumnName="id")}
     * )
     * @var File[]|ArrayCollection
     */
    private $referenceFiles;

    /**
     * @ORM\ManyToOne(targetEntity="File")
     * @ORM\JoinColumn(name="approved_file_id", referencedColumnName="id")
     * @var File|null
     */
    private $approvedFile;

    public function __construct()
    {
        $this->contentFiles = new ArrayCollection();
        $this->logoFiles = new ArrayCollection();
        $this->referenceFiles = new ArrayCollection();
        $this->photoFiles = new ArrayCollection();
    }

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
    public function setId(?int $id): Brief
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return File[]|ArrayCollection
     */
    public function getContentFiles()
    {
        return $this->contentFiles;
    }

    /**
     * @param File[]|ArrayCollection $contentFiles
     * @return $this
     */
    public function setContentFiles($contentFiles)
    {
        $this->contentFiles = $contentFiles;
        return $this;
    }

    /**
     * @return File[]|ArrayCollection
     */
    public function getLogoFiles()
    {
        return $this->logoFiles;
    }

    /**
     * @param File[]|ArrayCollection $logoFiles
     * @return $this
     */
    public function setLogoFiles($logoFiles)
    {
        $this->logoFiles = $logoFiles;
        return $this;
    }

    /**
     * @return File[]|ArrayCollection
     */
    public function getPhotoFiles()
    {
        return $this->photoFiles;
    }

    /**
     * @param File[]|ArrayCollection $photoFiles
     * @return $this
     */
    public function setPhotoFiles($photoFiles)
    {
        $this->photoFiles = $photoFiles;
        return $this;
    }

    /**
     * @return File[]|ArrayCollection
     */
    public function getReferenceFiles()
    {
        return $this->referenceFiles;
    }

    /**
     * @param File[]|ArrayCollection $referenceFiles
     * @return $this
     */
    public function setReferenceFiles($referenceFiles)
    {
        $this->referenceFiles = $referenceFiles;
        return $this;
    }

    /**
     * @return File|null
     */
    public function getApprovedFile(): ?File
    {
        return $this->approvedFile;
    }

    /**
     * @param File|null $approvedFile
     * @return $this
     */
    public function setApprovedFile(?File $approvedFile): Brief
    {
        $this->approvedFile = $approvedFile;
        return $this;
    }


    /**
     * @param File $file
     * @return $this
     */
    public function addLogoFile(File $file)
    {
        $this->logoFiles->add($file);
        return $this;
    }

    /**
     * @param File $file
     * @return $this
     */
    public function addContentFile(File $file)
    {
        $this->contentFiles->add($file);
        return $this;
    }

    /**
     * @param File $file
     * @return $this
     */
    public function addPhotoFile(File $file)
    {
        $this->photoFiles->add($file);
        return $this;
    }

    /**
     * @param File $file
     * @return $this
     */
    public function addReferenceFile(File $file)
    {
        $this->referenceFiles->add($file);
        return $this;
    }

}