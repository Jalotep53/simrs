<?php

namespace frontend\controllers;

use frontend\models\SatuSehatMedicationrequestRacikan;
use frontend\models\SatuSehatMedicationrequestRacikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatMedicationrequestRacikanController implements the CRUD actions for SatuSehatMedicationrequestRacikan model.
 */
class SatuSehatMedicationrequestRacikanController extends Controller
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
     * Lists all SatuSehatMedicationrequestRacikan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatMedicationrequestRacikanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatMedicationrequestRacikan model.
     * @param string $no_resep No Resep
     * @param string $kode_brng Kode Brng
     * @param string $no_racik No Racik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_resep, $kode_brng, $no_racik)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_resep, $kode_brng, $no_racik),
        ]);
    }

    /**
     * Creates a new SatuSehatMedicationrequestRacikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatMedicationrequestRacikan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_resep' => $model->no_resep, 'kode_brng' => $model->kode_brng, 'no_racik' => $model->no_racik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatMedicationrequestRacikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_resep No Resep
     * @param string $kode_brng Kode Brng
     * @param string $no_racik No Racik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_resep, $kode_brng, $no_racik)
    {
        $model = $this->findModel($no_resep, $kode_brng, $no_racik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_resep' => $model->no_resep, 'kode_brng' => $model->kode_brng, 'no_racik' => $model->no_racik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatMedicationrequestRacikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_resep No Resep
     * @param string $kode_brng Kode Brng
     * @param string $no_racik No Racik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_resep, $kode_brng, $no_racik)
    {
        $this->findModel($no_resep, $kode_brng, $no_racik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatMedicationrequestRacikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_resep No Resep
     * @param string $kode_brng Kode Brng
     * @param string $no_racik No Racik
     * @return SatuSehatMedicationrequestRacikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_resep, $kode_brng, $no_racik)
    {
        if (($model = SatuSehatMedicationrequestRacikan::findOne(['no_resep' => $no_resep, 'kode_brng' => $kode_brng, 'no_racik' => $no_racik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
