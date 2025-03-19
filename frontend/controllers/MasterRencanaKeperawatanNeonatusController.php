<?php

namespace frontend\controllers;

use frontend\models\MasterRencanaKeperawatanNeonatus;
use frontend\models\MasterRencanaKeperawatanNeonatusSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterRencanaKeperawatanNeonatusController implements the CRUD actions for MasterRencanaKeperawatanNeonatus model.
 */
class MasterRencanaKeperawatanNeonatusController extends Controller
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
     * Lists all MasterRencanaKeperawatanNeonatus models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterRencanaKeperawatanNeonatusSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterRencanaKeperawatanNeonatus model.
     * @param string $kode_rencana Kode Rencana
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_rencana)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_rencana),
        ]);
    }

    /**
     * Creates a new MasterRencanaKeperawatanNeonatus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterRencanaKeperawatanNeonatus();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_rencana' => $model->kode_rencana]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterRencanaKeperawatanNeonatus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_rencana Kode Rencana
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_rencana)
    {
        $model = $this->findModel($kode_rencana);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_rencana' => $model->kode_rencana]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterRencanaKeperawatanNeonatus model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_rencana Kode Rencana
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_rencana)
    {
        $this->findModel($kode_rencana)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterRencanaKeperawatanNeonatus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_rencana Kode Rencana
     * @return MasterRencanaKeperawatanNeonatus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_rencana)
    {
        if (($model = MasterRencanaKeperawatanNeonatus::findOne(['kode_rencana' => $kode_rencana])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
