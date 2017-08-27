<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 8/20/17
 * Time: 10:09 PM
 */

namespace AppBundle\TaskThreeLogic\Service;

use AppBundle\TaskThreeLogic\Entity\CdDvd;
use AppBundle\TaskThreeLogic\Storage\CdDvdStorage;

final class SaveCdDvdService
{
    private $cdDvdStorage;

    public function __construct(CdDvdStorage $cdDvdStorage)
    {
        $this->cdDvdStorage = $cdDvdStorage;
    }

    public function saveCdDvd(CdDvd $cdDvd)
    {
        $this->cdDvdStorage->save($cdDvd);
    }
}