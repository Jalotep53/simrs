<?php

namespace frontend\controllers;

use frontend\models\SatuSehatDiagnosticreportLab;
use frontend\models\SatuSehatDiagnosticreportLabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatDiagnosticreportLabController implements the CRUD actions for SatuSehatDiagnosticreportLab model.
 */
class SatuSehatDiagnosticreportLabController extends Controller
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
     * Lists all SatuSehatDiagnosticreportLab models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatDiagnosticreportLabSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatDiagnosticreportLab model.
     * @param string $noorder Noorder
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param int $id_template Id Template
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($noorder, $kd_jenis_prw, $id_template)
    {
        return $this->render('view', [
            'model' => $this->findModel($noorder, $kd_jenis_prw, $id_template),
        ]);
    }

    /**
     * Creates a new SatuSehatDiagnosticreportLab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatDiagnosticreportLab();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatDiagnosticreportLab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $noorder Noorder
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param int $id_template Id Template
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($noorder, $kd_jenis_prw, $id_template)
    {
        $model = $this->findModel($noorder, $kd_jenis_prw, $id_template);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatDiagnosticreportLab model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $noorder Noorder
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param int $id_template Id Template
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($noorder, $kd_jenis_prw, $id_template)
    {
        $this->findModel($noorder, $kd_jenis_prw, $id_template)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatDiagnosticreportLab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $noorder Noorder
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param int $id_template Id Template
     * @return SatuSehatDiagnosticreportLab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($noorder, $kd_jenis_prw, $id_template)
    {
        if (($model = SatuSehatDiagnosticreportLab::findOne(['noorder' => $noorder, 'kd_jenis_prw' => $kd_jenis_prw, 'id_template' => $id_template])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
