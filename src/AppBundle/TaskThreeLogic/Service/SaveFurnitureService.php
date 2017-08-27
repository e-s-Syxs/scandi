<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 8/20/17
 * Time: 12:36 PM
 */

namespace AppBundle\TaskThreeLogic\Service;

use AppBundle\TaskThreeLogic\Entity\Furniture;
use AppBundle\TaskThreeLogic\Storage\FurnitureStorage;

final class SaveFurnitureService
{
    private $furnitureStorage;

    /**
     * SaveFurnitureService constructor.
     * @param FurnitureStorage $furnitureStorage
     */
    public function __construct(FurnitureStorage $furnitureStorage)
    {
        $this->furnitureStorage = $furnitureStorage;
    }

    /**
     * @param Furniture $furniture
     */
    public function saveFurniture(Furniture $furniture)
    {
        $this->furnitureStorage->save($furniture);
    }
}