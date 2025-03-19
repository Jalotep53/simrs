<?php

namespace frontend\controllers;

use frontend\models\PengumumanEpasien;
use frontend\models\PengumumanEpasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PengumumanEpasienController implements the CRUD actions for PengumumanEpasien model.
 */
class PengumumanEpasienController extends Controller
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
     * Lists all PengumumanEpasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PengumumanEpasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PengumumanEpasien model.
     * @param string $nik Nik
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nik, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($nik, $tanggal),
        ]);
    }

    /**
     * Creates a new PengumumanEpasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PengumumanEpasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nik' => $model->nik, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PengumumanEpasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nik Nik
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nik, $tanggal)
    {
        $model = $this->findModel($nik, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nik' => $model->nik, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PengumumanEpasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nik Nik
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nik, $tanggal)
    {
        $this->findModel($nik, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PengumumanEpasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nik Nik
     * @param string $tanggal Tanggal
     * @return PengumumanEpasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nik, $tanggal)
    {
        if (($model = PengumumanEpasien::findOne(['nik' => $nik, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
