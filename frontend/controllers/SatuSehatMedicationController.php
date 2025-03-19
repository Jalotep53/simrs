<?php

namespace frontend\controllers;

use frontend\models\SatuSehatMedication;
use frontend\models\SatuSehatMedicationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatMedicationController implements the CRUD actions for SatuSehatMedication model.
 */
class SatuSehatMedicationController extends Controller
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
     * Lists all SatuSehatMedication models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatMedicationSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatMedication model.
     * @param string $kode_brng Kode Brng
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_brng)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_brng),
        ]);
    }

    /**
     * Creates a new SatuSehatMedication model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatMedication();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_brng' => $model->kode_brng]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatMedication model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_brng Kode Brng
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_brng)
    {
        $model = $this->findModel($kode_brng);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_brng' => $model->kode_brng]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatMedication model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_brng Kode Brng
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_brng)
    {
        $this->findModel($kode_brng)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatMedication model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_brng Kode Brng
     * @return SatuSehatMedication the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_brng)
    {
        if (($model = SatuSehatMedication::findOne(['kode_brng' => $kode_brng])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
