<?php

namespace app\components;

use Yii;
use yii\web\Controller;
use app\models\LogHistory;

class BaseController extends Controller
{
    public function beforeAction($action) {
        $model = new LogHistory();
        $model->id_user=Yii::$app->user->id;
        $model->action=Yii::$app->controller->action->id;       
        $model->page_url = Yii::$app->getRequest()->getUrl();
        $model->ip_address=Yii::$app->request->userIP;
        $model->created_at = time();
        $model->save(FALSE);
        return parent::beforeAction($action);
    }
}
