<?php
namespace app\widgets;

use yii\base\Widget;
use app\models\Product;
/**
 * Description of HotDealWidget
 *
 * @author ThanhJQK
 */
class HotDealWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('HotDeal');      
    }
}
