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
        $listproduct = Product::find()->where(['product_group_id'=>4,'active'=>1])->asArray()->all();
        echo '<pre>'; var_dump($listproduct); die;
        return $this->render('HotDeal');      
    }
}
