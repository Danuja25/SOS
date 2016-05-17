<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/10/2016
 * Time: 1:51 PM
 */

namespace App\Domain;


class Media
{

    private $mediaItem;

    /**
     * @return mixed
     */
    public function getMediaItem()
    {
        return $this->mediaItem;
    }

    /**
     * @param mixed $mediaItem
     */
    public function setMediaItem($mediaItem)
    {
        $this->mediaItem = $mediaItem;
    }
}