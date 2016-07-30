<?php

namespace devypt\yii2\assets;

class PlacesInputAsset extends \yii\web\AssetBundle
{

    public static $key;

    public $sourcePath = '@devypt/yii2-places-input-widget/sources/web';

    public $depends =
        [
            'yii\web\JqueryAsset',
        ];

    public $jsOptions =
        [
            'position' => \yii\web\View::POS_END,
        ];

    /**
     * PlacesInputAsset constructor.
     *
     * @param array $config
     */
    public function __construct($config = [])
    {
        $this->js[] = $this->getGoogleMapScriptUrl();
        if (YII_DEBUG) {
            $this->js[]  = 'js/places-input-widget.js';
            $this->css[] = 'css/places-input-widget.css';
        } else {
            $this->js[]  = 'js/places-input-widget.min.js';
            $this->css[] = 'css/places-input-widget.min.css';
        }
        parent::__construct($config);
    }

    /**
     * DESC
     *
     * @return string
     *
     * @author Ahmed Mohamed <devypt@gmail.com>
     *
     */
    private function getGoogleMapScriptUrl()
    {
        $scriptUrl = "//maps.googleapis.com/maps/api/js?";
        $scriptUrl .= http_build_query([
            'key'       => self::$key,
            'libraries' => 'places',
        ]);

        return $scriptUrl;
    }
}
