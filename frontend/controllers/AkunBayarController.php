<?php

namespace frontend\controllers;

use frontend\models\AkunBayar;
use frontend\models\AkunBayarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AkunBayarController implements the CRUD actions for AkunBayar model.
 */
class AkunBayarController extends Controller
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
     * Lists all AkunBayar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AkunBayarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AkunBayar model.
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
     * Creates a new AkunBayar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AkunBayar();

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
     * Updates an existing AkunBayar model.
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
     * Deletes an existing AkunBayar model.
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
     * Finds the AkunBayar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nama_bayar Nama Bayar
     * @return AkunBayar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nama_bayar)
    {
        if (($model = AkunBayar::findOne(['nama_bayar' => $nama_bayar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
