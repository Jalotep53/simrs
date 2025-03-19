<?php

namespace frontend\controllers;

use frontend\models\AkunBayarHutang;
use frontend\models\AkunBayarHutangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AkunBayarHutangController implements the CRUD actions for AkunBayarHutang model.
 */
class AkunBayarHutangController extends Controller
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
     * Lists all AkunBayarHutang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AkunBayarHutangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AkunBayarHutang model.
     * @param string $nama_bayar Nama Bayar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nama_bayar)
    {
        return $this->render('view', [
            'model' => $this->findModel($nama_bayar),
        ]);
    }

    /**
     * Creates a new AkunBayarHutang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AkunBayarHutang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nama_bayar' => $model->nama_bayar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AkunBayarHutang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nama_bayar Nama Bayar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nama_bayar)
    {
        $model = $this->findModel($nama_bayar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nama_bayar' => $model->nama_bayar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AkunBayarHutang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nama_bayar Nama Bayar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nama_bayar)
    {
        $this->findModel($nama_bayar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AkunBayarHutang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nama_bayar Nama Bayar
     * @return AkunBayarHutang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nama_bayar)
    {
        if (($model = AkunBayarHutang::findOne(['nama_bayar' => $nama_bayar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
