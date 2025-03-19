<?php

namespace frontend\controllers;

use frontend\models\DetailhibahObatBhp;
use frontend\models\DetailhibahObatBhpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailhibahObatBhpController implements the CRUD actions for DetailhibahObatBhp model.
 */
class DetailhibahObatBhpController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all DetailhibahObatBhp models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DetailhibahObatBhpSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailhibahObatBhp model.
     * @param string $no_hibah No Hibah
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_hibah, $kode_brng, $no_batch)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_hibah, $kode_brng, $no_batch),
        ]);
    }

    /**
     * Creates a new DetailhibahObatBhp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DetailhibahObatBhp();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_hibah' => $model->no_hibah, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailhibahObatBhp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_hibah No Hibah
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_hibah, $kode_brng, $no_batch)
    {
        $model = $this->findModel($no_hibah, $kode_brng, $no_batch);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_hibah' => $model->no_hibah, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailhibahObatBhp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_hibah No Hibah
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_hibah, $kode_brng, $no_batch)
    {
        $this->findModel($no_hibah, $kode_brng, $no_batch)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailhibahObatBhp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_hibah No Hibah
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @return DetailhibahObatBhp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_hibah, $kode_brng, $no_batch)
    {
        if (($model = DetailhibahObatBhp::findOne(['no_hibah' => $no_hibah, 'kode_brng' => $kode_brng, 'no_batch' => $no_batch])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
