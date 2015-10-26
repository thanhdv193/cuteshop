<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\Banner;
use app\models\BannerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Image;
use yii\web\UploadedFile;

/**
 * BannerController implements the CRUD actions for Banner model.
 */
class BannerController extends Controller
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
     * Lists all Banner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BannerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);        
        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banner model.
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
     * Creates a new Banner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Banner();
        $modelImage = new Image();   
        if($_POST){
            //below line will fetch all image related data and put it into $file as an object. Refer output of var_dump($file) after controller code.
            $file = UploadedFile::getInstances($model, 'image_id');
            echo '<pre>'; var_dump($file); die;
        }
        if ($model->load(Yii::$app->request->post()))
        {
            $post = Yii::$app->request->post();
            $modelImage->filename = UploadedFile::getInstance($model, 'image_id');
            var_dump($modelImage->filename); die;
            $imageUpload = $modelImage->upload('banner');
            if ($imageUpload)
            {
                $modelImage->object_id = 0;
                $modelImage->object_type = $post['image_type_id'];
                $modelImage->filename = $imageUpload['filename'];
                $modelImage->sort_order = 0;
                $modelImage->create_date = time();
                $modelImage->image_path = $imageUpload['patch'];
                if ($modelImage->save())
                {
                    $model->image_type_id = $post['image_type_id'];
                    $model->image_id = $modelImage->id;                    
                    $model->created_at = time();
                    if ($post['sort_order'] == null)
                    {
                        $model->sort_order = 0;
                    } else
                    {
                        $model->sort_order = $post['sort_order'];
                    }
                    $model->active = $post['active'];                    
                    if($model->save()){
                        $modelImg = Image::find()->where(['id'=>123])->one();
                        if($modelImg != null)
                        {
                            $modelImg->object_id = $model->banner_id;
                            $modelImg->save();
                        }
                        
                    }
                }
            }            
            return $this->redirect(['index']);
        } else
        {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Banner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save())
        {
            return $this->redirect(['view', 'id' => $model->banner_id]);
        } else
        {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Banner model.
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
     * Finds the Banner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Banner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Banner::findOne($id)) !== null)
        {
            return $model;
        } else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
