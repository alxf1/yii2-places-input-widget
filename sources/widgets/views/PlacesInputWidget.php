<?php

use yii\helpers\Html;

// Register asset bundle
\devypt\yii2\assets\PlacesInputAsset::register($this);

// [BEGIN] - Map input widget container
echo Html::beginTag(
    'div',
    [
        'class' => 'devypt-places-input-widget',
        'id'    => $id,
        'data'  =>
            [
                'latitude'  => $latitude,
                'longitude' => $longitude,
            ],
    ]
);

// The actual hidden input
echo Html::activeHiddenInput(
    $model,
    $attribute,
    [
        'class' => 'devypt-places-input-widget-input',
    ]
);

// Search bar input
echo Html::input(
    'text',
    null,
    null,
    [
        'class' => 'devypt-places-input-widget-search-bar',
    ]
);

// Map canvas
echo Html::tag(
    'div',
    '',
    [
        'class' => 'devypt-places-input-widget-canvas',
    ]
);

// [END] - Map input widget container
echo Html::endTag('div');
