<?php

namespace app\modules\fontend\controllers;

use Yii;
use yii\web\Cookie;
use app\models\Product;

class CartController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $product = array();
        $product_sl = array();
        $product_id = array();
        $cookies = Yii::$app->request->cookies;
        if ($cookies->has('user_guest_pc'))
        {
            $cookieValue = $cookies->getValue('user_guest_pc', null);
            if ($cookieValue != null)
            {
                $product = unserialize($cookieValue);
            }
        }

        foreach ($product as $value)
        {
            $product_sl[$value['id']] = $value;
            $product_id[] = $value['id'];
        }
        $listCart = Product::find()
                ->where(['product_id' => $product_id, 'active' => 1])
                ->asArray()
                ->all();
        foreach ($listCart as &$value)
        {
            if ($value['product_id'] == $product_sl[$value['product_id']]['id'])
            {
                $value['product_sl'] = $product_sl[$value['product_id']]['sl'];
                $value['money_all'] = $value['product_sl'] * (int) $value['price'];
            }
        }

        return $this->renderPartial('index', ['data' => $listCart]);
    }

    public function actionAdd($id)
    {
//        $cookies = Yii::$app->response->cookies;
//        $cookies->remove('user_guest_pc');

        $product_id = array(
            array('id' => $id, 'sl' => 1)
        );
        if (Yii::$app->user->isGuest == false)
        { // user ->save db
            echo Yii::$app->user->identity->username;
            die();
        } else
        {
            // guest -> save cookie
            $cookies = Yii::$app->request->cookies;
            if ($cookies->has('user_guest_pc'))
            {
                $cookieValue = $cookies->getValue('user_guest_pc', null);
                if ($cookieValue == null)
                {
                    $data = $product_id;
                    $cookies = Yii::$app->response->cookies;
                    $cookies->add(new \yii\web\Cookie([
                        'name' => 'user_guest_pc',
                        'value' => serialize($data),
                        'expire' => time() + 300, // 5p
                    ]));
                } else
                {
                    //$product_extra = 15;
                    $value = unserialize($cookieValue);

                    if (is_array($value))
                    {
                        $check = false;
                        foreach ($value as &$data)
                        {
                            if ($data['id'] == $id)
                            {
                                $check = true;
                                $data['sl'] = $data['sl'] + 1;
                            }
                        }
                        if ($check == false)
                        {
                            array_push($value, array('id' => $id, 'sl' => 1));
                        }
                    }
                    $cookies = Yii::$app->response->cookies;
                    $cookies->add(new \yii\web\Cookie([
                        'name' => 'user_guest_pc',
                        'value' => serialize($value),
                        'expire' => time() + 300, // 5p
                    ]));
                }
            } else
            {
                $data = $product_id;
                $cookies = Yii::$app->response->cookies;
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'user_guest_pc',
                    'value' => serialize($data),
                    'expire' => time() + 300, // 5p
                ]));
            }
        }
    }

    public function actionDeleteCart()
    {
        if (Yii::$app->request->post())
        {
            $id = 1;
            if (Yii::$app->user->isGuest == false)
            { // user ->save db
                echo Yii::$app->user->identity->username;
                die();
            } else
            {
                $cookies = Yii::$app->request->cookies;
                if ($cookies->has('user_guest_pc'))
                {
                    $cookieValue = $cookies->getValue('user_guest_pc', null);
                    if ($cookieValue == null)
                    {
                        $data = $product_id;
                        $cookies = Yii::$app->response->cookies;
                        $cookies->add(new \yii\web\Cookie([
                            'name' => 'user_guest_pc',
                            'value' => serialize($data),
                            'expire' => time() + 300, // 5p
                        ]));
                    }
                } else
                {
                    
                }
            }
        }
    }

}
