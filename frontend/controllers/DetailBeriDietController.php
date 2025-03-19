<?php

namespace frontend\controllers;

use frontend\models\DetailBeriDiet;
use frontend\models\DetailBeriDietSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailBeriDietController implements the CRUD actions for DetailBeriDiet model.
 */
class DetailBeriDietController extends Controller
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
     * Lists all DetailBeriDiet models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DetailBeriDietSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailBeriDiet model.
     * @param string $no_rawat No Rawat
     * @param string $kd_kamar Kd Kamar
     * @param string $tanggal Tanggal
     * @param string $waktu Waktu
     * @param string $kd_diet Kd Diet
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kd_kamar, $tanggal, $waktu, $kd_diet)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kd_kamar, $tanggal, $waktu, $kd_diet),
        ]);
    }

    /**
     * Creates a new DetailBeriDiet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DetailBeriDiet();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu, 'kd_diet' => $model->kd_diet]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailBeriDiet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_kamar Kd Kamar
     * @param string $tanggal Tanggal
     * @param string $waktu Waktu
     * @param string $kd_diet Kd Diet
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kd_kamar, $tanggal, $waktu, $kd_diet)
    {
        $model = $this->findModel($no_rawat, $kd_kamar, $tanggal, $waktu, $kd_diet);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu, 'kd_diet' => $model->kd_diet]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailBeriDiet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_kamar Kd Kamar
     * @param string $tanggal Tanggal
     * @param string $waktu Waktu
     * @param string $kd_diet Kd Diet
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kd_kamar, $tanggal, $waktu, $kd_diet)
    {
        $this->findModel($no_rawat, $kd_kamar, $tanggal, $waktu, $kd_diet)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailBeriDiet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kd_kamar Kd Kamar
     * @param string $tanggal Tanggal
     * @param string $waktu Waktu
     * @param string $kd_diet Kd Diet
     * @return DetailBeriDiet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kd_kamar, $tanggal, $waktu, $kd_diet)
    {
        if (($model = DetailBeriDiet::findOne(['no_rawat' => $no_rawat, 'kd_kamar' => $kd_kamar, 'tanggal' => $tanggal, 'waktu' => $waktu, 'kd_diet' => $kd_diet])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
