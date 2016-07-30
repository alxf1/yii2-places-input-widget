<?php

namespace devypt\yii2\widgets;

use Yii;

class PlacesInputWidget extends \yii\widgets\InputWidget
{

    public $key;

    public $latitude = 0;

    public $longitude = 0;

    public $pattern = '(%latitude%,%longitude%)';

    public function run()
    {

        Yii::setAlias('@devypt', '@vendor/devypt');

        // Asset bundle should be configured with the application key
        $this->configureAssetBundle();

        return $this->render(
            'PlacesInputWidget',
            [
                'id'        => $this->getId(),
                'model'     => $this->model,
                'attribute' => $this->attribute,
                'latitude'  => $this->latitude,
                'longitude' => $this->longitude,
                'pattern'   => $this->pattern,
            ]
        );
    }

    private function configureAssetBundle()
    {
        \devypt\yii2\assets\PlacesInputAsset::$key = $this->key;
    }
}
