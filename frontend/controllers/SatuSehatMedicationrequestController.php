<?php

namespace frontend\controllers;

use frontend\models\SatuSehatMedicationrequest;
use frontend\models\SatuSehatMedicationrequestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatMedicationrequestController implements the CRUD actions for SatuSehatMedicationrequest model.
 */
class SatuSehatMedicationrequestController extends Controller
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
     * Lists all SatuSehatMedicationrequest models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatMedicationrequestSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatMedicationrequest model.
     * @param string $no_resep No Resep
     * @param string $kode_brng Kode Brng
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_resep, $kode_brng)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_resep, $kode_brng),
        ]);
    }

    /**
     * Creates a new SatuSehatMedicationrequest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatMedicationrequest();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_resep' => $model->no_resep, 'kode_brng' => $model->kode_brng]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatMedicationrequest model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_resep No Resep
     * @param string $kode_brng Kode Brng
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_resep, $kode_brng)
    {
        $model = $this->findModel($no_resep, $kode_brng);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_resep' => $model->no_resep, 'kode_brng' => $model->kode_brng]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatMedicationrequest model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_resep No Resep
     * @param string $kode_brng Kode Brng
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_resep, $kode_brng)
    {
        $this->findModel($no_resep, $kode_brng)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatMedicationrequest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_resep No Resep
     * @param string $kode_brng Kode Brng
     * @return SatuSehatMedicationrequest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_resep, $kode_brng)
    {
        if (($model = SatuSehatMedicationrequest::findOne(['no_resep' => $no_resep, 'kode_brng' => $kode_brng])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
