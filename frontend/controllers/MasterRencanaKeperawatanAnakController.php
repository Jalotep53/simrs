<?php

namespace frontend\controllers;

use frontend\models\MasterRencanaKeperawatanAnak;
use frontend\models\MasterRencanaKeperawatanAnakSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterRencanaKeperawatanAnakController implements the CRUD actions for MasterRencanaKeperawatanAnak model.
 */
class MasterRencanaKeperawatanAnakController extends Controller
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
     * Lists all MasterRencanaKeperawatanAnak models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterRencanaKeperawatanAnakSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterRencanaKeperawatanAnak model.
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
     * Creates a new MasterRencanaKeperawatanAnak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterRencanaKeperawatanAnak();

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
     * Updates an existing MasterRencanaKeperawatanAnak model.
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
     * Deletes an existing MasterRencanaKeperawatanAnak model.
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
     * Finds the MasterRencanaKeperawatanAnak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_rencana Kode Rencana
     * @return MasterRencanaKeperawatanAnak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_rencana)
    {
        if (($model = MasterRencanaKeperawatanAnak::findOne(['kode_rencana' => $kode_rencana])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
