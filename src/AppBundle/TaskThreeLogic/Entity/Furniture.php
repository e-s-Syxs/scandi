<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 8/19/17
 * Time: 10:29 PM
 */

namespace AppBundle\TaskThreeLogic\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Furniture
 * @package AppBundle\TaskThreeLogic\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\TaskThreeLogic\Entity\Furniture")
 * @ORM\Table(name="Furniture")
 */
final class Furniture extends Product
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id = null;
    /**
     * @ORM\Column(type="string")
     * @ORM\Size
     */
    private $size = null;
    /**
     * @ORM\Column(type="string")
     * @ORM\Manufacturer
     */
    private $material = null;
    /**
     * @ORM\Column(type="string")
     * @ORM\Name
     */
    private $name = null;

    public function __construct($title, $price, $size, $material)
    {
        parent::__construct($title, $price);

        $this->size = $size;
        $this->material = $material;
        $this->name = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->getTitle();
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getAllAttributes(): array
    {
        return [
            'title' => $this->title,
            'name' => $this->name,
            'price' => $this->price,
            'size' => $this->size,
            'material' => $this->material,
        ];
    }
}