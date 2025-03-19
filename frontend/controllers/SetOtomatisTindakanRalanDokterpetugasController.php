<?php

namespace frontend\controllers;

use frontend\models\SetOtomatisTindakanRalanDokterpetugas;
use frontend\models\SetOtomatisTindakanRalanDokterpetugasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetOtomatisTindakanRalanDokterpetugasController implements the CRUD actions for SetOtomatisTindakanRalanDokterpetugas model.
 */
class SetOtomatisTindakanRalanDokterpetugasController extends Controller
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
     * Lists all SetOtomatisTindakanRalanDokterpetugas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetOtomatisTindakanRalanDokterpetugasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetOtomatisTindakanRalanDokterpetugas model.
     * @param string $kd_dokter Kd Dokter
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_pj Kd Pj
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_dokter, $kd_jenis_prw, $kd_pj)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_dokter, $kd_jenis_prw, $kd_pj),
        ]);
    }

    /**
     * Creates a new SetOtomatisTindakanRalanDokterpetugas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetOtomatisTindakanRalanDokterpetugas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_dokter' => $model->kd_dokter, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetOtomatisTindakanRalanDokterpetugas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_dokter Kd Dokter
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_pj Kd Pj
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_dokter, $kd_jenis_prw, $kd_pj)
    {
        $model = $this->findModel($kd_dokter, $kd_jenis_prw, $kd_pj);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_dokter' => $model->kd_dokter, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetOtomatisTindakanRalanDokterpetugas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_dokter Kd Dokter
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_pj Kd Pj
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_dokter, $kd_jenis_prw, $kd_pj)
    {
        $this->findModel($kd_dokter, $kd_jenis_prw, $kd_pj)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetOtomatisTindakanRalanDokterpetugas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_dokter Kd Dokter
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_pj Kd Pj
     * @return SetOtomatisTindakanRalanDokterpetugas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_dokter, $kd_jenis_prw, $kd_pj)
    {
        if (($model = SetOtomatisTindakanRalanDokterpetugas::findOne(['kd_dokter' => $kd_dokter, 'kd_jenis_prw' => $kd_jenis_prw, 'kd_pj' => $kd_pj])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
