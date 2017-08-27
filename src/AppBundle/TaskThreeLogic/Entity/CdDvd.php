<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 8/19/17
 * Time: 10:38 PM
 */

namespace AppBundle\TaskThreeLogic\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CdDvd
 * @package AppBundle\TaskThreeLogic\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\TaskThreeLogic\Entity\CdDvd")
 * @ORM\Table(name="CdDvd")
 */
final class CdDvd extends Product
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id = null;
    /**
     * @ORM\Column(type="integer")
     * @ORM\Size
     */
    private $size = null;
    /**
     * @ORM\Column(type="string")
     * @ORM\Manufacturer
     */
    private $manufacturer = null;
    /**
     * @ORM\Column(type="string")
     * @ORM\Name
     */
    private $name = null;

    public function __construct($title, $price, $size, $manufacturer)
    {
        parent::__construct($title, $price);

        $this->size = $size;
        $this->manufacturer = $manufacturer;
        $this->name = $title . ' ' . $size . "MB";
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
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
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
            'manufacturer' => $this->manufacturer,
        ];
    }
}