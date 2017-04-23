<?php

namespace backend\controllers;

use Yii;
use common\models\News;
use common\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\components\Util;
use yii\web\UploadedFile;
/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post())) {
            $model->fileImage = UploadedFile::getInstance($model, 'fileImage');
            if ($model->fileImage) {
                $model->image = Yii::$app->security->generateRandomString() . '.' . $model->fileImage->extension;
            }
            if ($model->save()) {
                if (!empty($model->image)) {
                    Util::uploadFile($model->fileImage, $model->image);
                }
                return $this->redirect(['index']);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['view', 'id' => $model->newsId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->fileImage = UploadedFile::getInstance($model, 'fileImage');   
            $old_image = "";
            if ($model->fileImage) {
                $oldImage = $model->image;
                $model->image = Yii::$app->security->generateRandomString() . '.' . $model->fileImage->extension;
            }
            if ($model->save()) {
                if (!empty($model->fileImage)) {
                    Util::deleteFile($oldImage);
                    Util::uploadFile($model->fileImage, $model->image);
                }
                return $this->redirect(['index']);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        Util::deleteFile($model->image);
        $model->delete();
        return $this->redirect(['index']);
    }
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
