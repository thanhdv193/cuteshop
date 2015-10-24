<?php

namespace app\models;

use Yii;
use app\components\helpers\SystemHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property string $product_id
 * @property string $product_category_id
 * @property string $product_group_id
 * @property string $product_node_id
 * @property string $name
 * @property string $title
 * @property string $h1
 * @property string $meta_description
 * @property string $view_count
 * @property string $content
 * @property string $announce
 * @property integer $sort_order
 * @property integer $active
 * @property double $price
 * @property double $old_price
 * @property string $quantity_current
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_category_id', 'product_node_id', 'name', 'view_count', 'quantity_current'], 'required'],
            [['product_category_id', 'product_group_id', 'product_node_id', 'view_count', 'sort_order', 'active', 'quantity_current'], 'integer'],
            [['image_id'], 'file','extensions' => 'PNG,JPG,png,jpg', 'maxFiles' => 4],
            [['content', 'announce'], 'string'],
            [['price', 'old_price'], 'number'],
            [['name', 'title', 'h1', 'meta_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_category_id' => 'Product Category ID',
            'product_group_id' => 'Product Group ID',
            'product_node_id' => 'Product Node ID',
            'name' => 'Name',
            'title' => 'Title',
            'h1' => 'H1',
            'meta_description' => 'Meta Description',
            'view_count' => 'View Count',
            'content' => 'Content',
            'announce' => 'Announce',
            'sort_order' => 'Sort Order',
            'active' => 'Active',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'quantity_current' => 'Quantity Current',
        ];
    }
    public function upload($user_name) {
       
        if ($this->image_id) {      
            $baseName = SystemHelper::convertMaTV($this->image_id->baseName);            
            $this->image_id->saveAs('upload/product/' . time() .'_'. $user_name .'_'.$baseName. '.' . $this->image_id->extension);
            return time() .'_'. $user_name .'_'.$baseName. '.' . $this->image_id->extension;
        } else {
            return false;
        }
    }
}
