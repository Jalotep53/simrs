<?php

namespace frontend\controllers;

use frontend\models\MapingObatApotekBpjs;
use frontend\models\MapingObatApotekBpjsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MapingObatApotekBpjsController implements the CRUD actions for MapingObatApotekBpjs model.
 */
class MapingObatApotekBpjsController extends Controller
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
     * Lists all MapingObatApotekBpjs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MapingObatApotekBpjsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MapingObatApotekBpjs model.
     * @param string $kode_brng_apotek_bpjs Kode Brng Apotek Bpjs
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_brng_apotek_bpjs)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_brng_apotek_bpjs),
        ]);
    }

    /**
     * Creates a new MapingObatApotekBpjs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MapingObatApotekBpjs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_brng_apotek_bpjs' => $model->kode_brng_apotek_bpjs]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MapingObatApotekBpjs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_brng_apotek_bpjs Kode Brng Apotek Bpjs
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_brng_apotek_bpjs)
    {
        $model = $this->findModel($kode_brng_apotek_bpjs);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_brng_apotek_bpjs' => $model->kode_brng_apotek_bpjs]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MapingObatApotekBpjs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_brng_apotek_bpjs Kode Brng Apotek Bpjs
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_brng_apotek_bpjs)
    {
        $this->findModel($kode_brng_apotek_bpjs)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MapingObatApotekBpjs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_brng_apotek_bpjs Kode Brng Apotek Bpjs
     * @return MapingObatApotekBpjs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_brng_apotek_bpjs)
    {
        if (($model = MapingObatApotekBpjs::findOne(['kode_brng_apotek_bpjs' => $kode_brng_apotek_bpjs])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
