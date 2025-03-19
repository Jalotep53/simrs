<?php

namespace frontend\controllers;

use frontend\models\DetailNotaJalan;
use frontend\models\DetailNotaJalanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailNotaJalanController implements the CRUD actions for DetailNotaJalan model.
 */
class DetailNotaJalanController extends Controller
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
     * Lists all DetailNotaJalan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DetailNotaJalanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailNotaJalan model.
     * @param string $no_rawat No Rawat
     * @param string $nama_bayar Nama Bayar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $nama_bayar)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $nama_bayar),
        ]);
    }

    /**
     * Creates a new DetailNotaJalan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DetailNotaJalan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'nama_bayar' => $model->nama_bayar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailNotaJalan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $nama_bayar Nama Bayar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $nama_bayar)
    {
        $model = $this->findModel($no_rawat, $nama_bayar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'nama_bayar' => $model->nama_bayar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailNotaJalan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $nama_bayar Nama Bayar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $nama_bayar)
    {
        $this->findModel($no_rawat, $nama_bayar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailNotaJalan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $nama_bayar Nama Bayar
     * @return DetailNotaJalan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $nama_bayar)
    {
        if (($model = DetailNotaJalan::findOne(['no_rawat' => $no_rawat, 'nama_bayar' => $nama_bayar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
