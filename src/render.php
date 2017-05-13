<?php
namespace BulletProof;

require_once('utils/func.image-resize.php');

class Render
{
    public function resizeImage($image, $mimeType, $imgWidth, $imgHeight, $newWidth, $newHeight){
        return resize($image, $mimeType, $imgWidth, $imgHeight, $newWidth, $newHeight);
    }
}