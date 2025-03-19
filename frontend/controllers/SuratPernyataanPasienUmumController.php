<?php

namespace frontend\controllers;

use frontend\models\SuratPernyataanPasienUmum;
use frontend\models\SuratPernyataanPasienUmumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratPernyataanPasienUmumController implements the CRUD actions for SuratPernyataanPasienUmum model.
 */
class SuratPernyataanPasienUmumController extends Controller
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
     * Lists all SuratPernyataanPasienUmum models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratPernyataanPasienUmumSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratPernyataanPasienUmum model.
     * @param string $no_surat No Surat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_surat)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_surat),
        ]);
    }

    /**
     * Creates a new SuratPernyataanPasienUmum model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratPernyataanPasienUmum();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_surat' => $model->no_surat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SuratPernyataanPasienUmum model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_surat No Surat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_surat)
    {
        $model = $this->findModel($no_surat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_surat' => $model->no_surat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratPernyataanPasienUmum model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_surat No Surat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_surat)
    {
        $this->findModel($no_surat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratPernyataanPasienUmum model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_surat No Surat
     * @return SuratPernyataanPasienUmum the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_surat)
    {
        if (($model = SuratPernyataanPasienUmum::findOne(['no_surat' => $no_surat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
