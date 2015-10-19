<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\BackendMenu;


class BackendMenuWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $menu = BackendMenu::find()->where(['parent_id'=>0])->asArray()->all();
      //echo'<pre>';  var_dump($menu); echo'<pre>'; die;
        return $this->render('BackendMenu',['menu'=>$menu]);
    }

}
