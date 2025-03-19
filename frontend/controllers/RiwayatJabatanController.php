<?php

namespace frontend\controllers;

use frontend\models\RiwayatJabatan;
use frontend\models\RiwayatJabatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RiwayatJabatanController implements the CRUD actions for RiwayatJabatan model.
 */
class RiwayatJabatanController extends Controller
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
     * Lists all RiwayatJabatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RiwayatJabatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RiwayatJabatan model.
     * @param int $id ID
     * @param string $jabatan Jabatan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $jabatan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $jabatan),
        ]);
    }

    /**
     * Creates a new RiwayatJabatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RiwayatJabatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'jabatan' => $model->jabatan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RiwayatJabatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $jabatan Jabatan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $jabatan)
    {
        $model = $this->findModel($id, $jabatan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'jabatan' => $model->jabatan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RiwayatJabatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $jabatan Jabatan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $jabatan)
    {
        $this->findModel($id, $jabatan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RiwayatJabatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $jabatan Jabatan
     * @return RiwayatJabatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $jabatan)
    {
        if (($model = RiwayatJabatan::findOne(['id' => $id, 'jabatan' => $jabatan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
