<?php

namespace app\modules\fontend\controllers;

use yii\web\Controller;
use app\models\Product;
use app\models\Image;

class ProductController extends Controller
{
    public function actionIndex()
    {
    	
        return $this->render('index');
    }
    public function actionProductDetail($id)
    {
        $product = Product::find()->where(['product_id'=>$id,'active'=>1])->asArray()->one();
        $imageProduct = Image::find()->where(['object_id'=>$id,'object_type'=>'product'])->all();
        $product['list-image'] = $imageProduct;
        return $this->render('product-detail',['data'=>$product]);
    }
}
