<?php

namespace frontend\controllers;

use frontend\models\RiwayatPenelitian;
use frontend\models\RiwayatPenelitianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RiwayatPenelitianController implements the CRUD actions for RiwayatPenelitian model.
 */
class RiwayatPenelitianController extends Controller
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
     * Lists all RiwayatPenelitian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RiwayatPenelitianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RiwayatPenelitian model.
     * @param int $id ID
     * @param string $judul_penelitian Judul Penelitian
     * @param string $tahun Tahun
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $judul_penelitian, $tahun)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $judul_penelitian, $tahun),
        ]);
    }

    /**
     * Creates a new RiwayatPenelitian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RiwayatPenelitian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'judul_penelitian' => $model->judul_penelitian, 'tahun' => $model->tahun]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RiwayatPenelitian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $judul_penelitian Judul Penelitian
     * @param string $tahun Tahun
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $judul_penelitian, $tahun)
    {
        $model = $this->findModel($id, $judul_penelitian, $tahun);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'judul_penelitian' => $model->judul_penelitian, 'tahun' => $model->tahun]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RiwayatPenelitian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $judul_penelitian Judul Penelitian
     * @param string $tahun Tahun
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $judul_penelitian, $tahun)
    {
        $this->findModel($id, $judul_penelitian, $tahun)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RiwayatPenelitian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $judul_penelitian Judul Penelitian
     * @param string $tahun Tahun
     * @return RiwayatPenelitian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $judul_penelitian, $tahun)
    {
        if (($model = RiwayatPenelitian::findOne(['id' => $id, 'judul_penelitian' => $judul_penelitian, 'tahun' => $tahun])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
