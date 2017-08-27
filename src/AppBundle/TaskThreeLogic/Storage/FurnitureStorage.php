<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 8/20/17
 * Time: 12:43 PM
 */

namespace AppBundle\TaskThreeLogic\Storage;


use AppBundle\TaskThreeLogic\Entity\Furniture;
use Doctrine\ORM\EntityManagerInterface;

final class FurnitureStorage
{
    private $doctrine = null;

    /**
     * FurnitureStorage constructor.
     * @param EntityManagerInterface $doctrine
     */
    public function __construct(EntityManagerInterface $doctrine)
    {
        $this->doctrine = $doctrine;

    }

    /**
     * @param Furniture $furniture
     */
    public function save(Furniture $furniture)
    {
        $this->doctrine->persist($furniture);
        $this->doctrine->flush();
    }
}