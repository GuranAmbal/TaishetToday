<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


class ImagesUpload extends Model
{

    public $img_s;
    public function rules()
    {
        return [
            [
                'img_s', 'image',
                'extensions' => ['jpg', 'jpeg', 'png', 'gif'],
                'checkExtensionByMimeType' => true,
                'maxSize' => 712000, // 500 килобайт = 500 * 1024 байта = 512 000 байт
                'tooBig' => 'Limit is 700KB',
                'maxFiles' => 5
            ]
        ];
    }
    public function uploadFile($currentImage)
    {

        if ($this->validate()) {
            $names = "";
            foreach ($this->img_s as $file) {
                $this->deleteCurrentImage($currentImage);
                $filename = strtolower(md5(uniqid($file->baseName)) . '.' . $file->extension);
                $file->saveAs($this->getFolder() . $filename);
                $names .= $filename . ", ";
            }

            $result = substr($names, 0, strripos($names, ','));
            return $result;
        }
    }
    private function getFolder()
    {
        return Yii::getAlias('@web') . 'uploades/';
    }


    public function deleteCurrentImage($currentImage)
    {

        if ($this->fileExists($currentImage)) {
            $pieces = explode(", ", $currentImage);
            foreach ($pieces as $value) {

                unlink($this->getFolder() . $value);
            }
        }
    }

    public function fileExists($currentImage)
    {
        if (!empty($currentImage) && $currentImage != null) {
            return file_exists($this->getFolder() . $currentImage);
        }
    }
    public function saveImage()
    {
        $filename = $this->randomFileName();
        $this->img_s->saveAs($this->getFolder() . $filename);
        return $filename;
    }
}
