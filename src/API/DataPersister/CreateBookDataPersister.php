<?php
/**
 * test-api-platform
 * User: poraphitchuesook
 * Date: 2019-01-28
 * Time: 13:58
 */

namespace App\API\DataPersister;


use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\API\BookCommand;
use App\Entity\Book;

class CreateBookDataPersister implements DataPersisterInterface
{

    public function __construct()
    {
    }

    public function supports($data): bool
    {
        return $data instanceof BookCommand;
    }

    /**
     * @param BookCommand $data
     * @return object
     */
    public function persist($data)
    {
        $newBook = new Book();

        $newBook
            ->setTitle($data->getTitle())
            ->setDescription($data->getDescription())
            ->setIsbn($data->getIsbn())
            ->setPublishedYear($data->getPublishedYear())
        ;

        return $data;
    }

    public function remove($data)
    {
        throw new \RuntimeException('"remove" is not supported');
    }

}