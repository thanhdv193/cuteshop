<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\Product;
use app\models\Image;

class ProductBoxOneWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        
        return $this->render('ProductBoxOne');
    }

}
