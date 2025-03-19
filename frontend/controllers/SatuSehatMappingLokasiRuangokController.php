<?php

namespace frontend\controllers;

use frontend\models\SatuSehatMappingLokasiRuangok;
use frontend\models\SatuSehatMappingLokasiRuangokSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatMappingLokasiRuangokController implements the CRUD actions for SatuSehatMappingLokasiRuangok model.
 */
class SatuSehatMappingLokasiRuangokController extends Controller
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
     * Lists all SatuSehatMappingLokasiRuangok models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatMappingLokasiRuangokSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatMappingLokasiRuangok model.
     * @param string $id_lokasi_satusehat Id Lokasi Satusehat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_lokasi_satusehat)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_lokasi_satusehat),
        ]);
    }

    /**
     * Creates a new SatuSehatMappingLokasiRuangok model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatMappingLokasiRuangok();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_lokasi_satusehat' => $model->id_lokasi_satusehat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatMappingLokasiRuangok model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_lokasi_satusehat Id Lokasi Satusehat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_lokasi_satusehat)
    {
        $model = $this->findModel($id_lokasi_satusehat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_lokasi_satusehat' => $model->id_lokasi_satusehat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatMappingLokasiRuangok model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_lokasi_satusehat Id Lokasi Satusehat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_lokasi_satusehat)
    {
        $this->findModel($id_lokasi_satusehat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatMappingLokasiRuangok model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_lokasi_satusehat Id Lokasi Satusehat
     * @return SatuSehatMappingLokasiRuangok the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_lokasi_satusehat)
    {
        if (($model = SatuSehatMappingLokasiRuangok::findOne(['id_lokasi_satusehat' => $id_lokasi_satusehat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
