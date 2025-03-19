<?php

namespace frontend\controllers;

use frontend\models\SetOtomatisTindakanRalanPetugas;
use frontend\models\SetOtomatisTindakanRalanPetugasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetOtomatisTindakanRalanPetugasController implements the CRUD actions for SetOtomatisTindakanRalanPetugas model.
 */
class SetOtomatisTindakanRalanPetugasController extends Controller
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
     * Lists all SetOtomatisTindakanRalanPetugas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetOtomatisTindakanRalanPetugasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetOtomatisTindakanRalanPetugas model.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_pj Kd Pj
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jenis_prw, $kd_pj)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jenis_prw, $kd_pj),
        ]);
    }

    /**
     * Creates a new SetOtomatisTindakanRalanPetugas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetOtomatisTindakanRalanPetugas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetOtomatisTindakanRalanPetugas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_pj Kd Pj
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jenis_prw, $kd_pj)
    {
        $model = $this->findModel($kd_jenis_prw, $kd_pj);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetOtomatisTindakanRalanPetugas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_pj Kd Pj
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jenis_prw, $kd_pj)
    {
        $this->findModel($kd_jenis_prw, $kd_pj)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetOtomatisTindakanRalanPetugas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_pj Kd Pj
     * @return SetOtomatisTindakanRalanPetugas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jenis_prw, $kd_pj)
    {
        if (($model = SetOtomatisTindakanRalanPetugas::findOne(['kd_jenis_prw' => $kd_jenis_prw, 'kd_pj' => $kd_pj])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
