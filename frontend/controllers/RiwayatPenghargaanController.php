<?php

namespace frontend\controllers;

use frontend\models\RiwayatPenghargaan;
use frontend\models\RiwayatPenghargaanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RiwayatPenghargaanController implements the CRUD actions for RiwayatPenghargaan model.
 */
class RiwayatPenghargaanController extends Controller
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
     * Lists all RiwayatPenghargaan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RiwayatPenghargaanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RiwayatPenghargaan model.
     * @param int $id ID
     * @param string $nama_penghargaan Nama Penghargaan
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $nama_penghargaan, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $nama_penghargaan, $tanggal),
        ]);
    }

    /**
     * Creates a new RiwayatPenghargaan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RiwayatPenghargaan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'nama_penghargaan' => $model->nama_penghargaan, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RiwayatPenghargaan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $nama_penghargaan Nama Penghargaan
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $nama_penghargaan, $tanggal)
    {
        $model = $this->findModel($id, $nama_penghargaan, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'nama_penghargaan' => $model->nama_penghargaan, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RiwayatPenghargaan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $nama_penghargaan Nama Penghargaan
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $nama_penghargaan, $tanggal)
    {
        $this->findModel($id, $nama_penghargaan, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RiwayatPenghargaan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $nama_penghargaan Nama Penghargaan
     * @param string $tanggal Tanggal
     * @return RiwayatPenghargaan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $nama_penghargaan, $tanggal)
    {
        if (($model = RiwayatPenghargaan::findOne(['id' => $id, 'nama_penghargaan' => $nama_penghargaan, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
