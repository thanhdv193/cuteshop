<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\Product;
use app\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        
        
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        //$hash = md5(uniqid('', true));
        if($_POST){
            //below line will fetch all image related data and put it into $file as an object. Refer output of var_dump($file) after controller code.
            $file = UploadedFile::getInstances($model, 'image_id');
            echo '<pre>'; var_dump($file); die;
        }
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();
            //$post = Yii::$app->request->getBodyParams();
            $file_name = $_FILES['image_id'];
            $model->image_id = UploadedFile::getInstance($post['image_id']);
            echo'<pre>'; var_dump($post['image_id']); die;
            
            return $this->redirect(['view', 'id' => $model->product_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionUpLoadImage()
    {
        $model = new Product();
        $modelImage = new Image(); 
        $post = Yii::$app->request->getBodyParams();
        $file_name = $_FILES['image_id'];        
        $objecFile = new UploadedFile();
        foreach ($file_name as $key => $value)
        {
            if ($key == 'tmp_name')
            {
                $objecFile->tempName = $value;
            } else
            {
                $objecFile->$key = $value;
            }
        }
        $model->image_id = $objecFile;
        $model->upload();
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->product_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
