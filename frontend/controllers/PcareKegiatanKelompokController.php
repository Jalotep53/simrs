<?php

namespace frontend\controllers;

use frontend\models\PcareKegiatanKelompok;
use frontend\models\PcareKegiatanKelompokSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PcareKegiatanKelompokController implements the CRUD actions for PcareKegiatanKelompok model.
 */
class PcareKegiatanKelompokController extends Controller
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
     * Lists all PcareKegiatanKelompok models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PcareKegiatanKelompokSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PcareKegiatanKelompok model.
     * @param string $eduId Edu ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($eduId)
    {
        return $this->render('view', [
            'model' => $this->findModel($eduId),
        ]);
    }

    /**
     * Creates a new PcareKegiatanKelompok model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PcareKegiatanKelompok();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'eduId' => $model->eduId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PcareKegiatanKelompok model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $eduId Edu ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($eduId)
    {
        $model = $this->findModel($eduId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'eduId' => $model->eduId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PcareKegiatanKelompok model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $eduId Edu ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($eduId)
    {
        $this->findModel($eduId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PcareKegiatanKelompok model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $eduId Edu ID
     * @return PcareKegiatanKelompok the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($eduId)
    {
        if (($model = PcareKegiatanKelompok::findOne(['eduId' => $eduId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
