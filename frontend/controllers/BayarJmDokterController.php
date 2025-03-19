<?php

namespace frontend\controllers;

use frontend\models\BayarJmDokter;
use frontend\modelsBayarJmDokterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BayarJmDokterController implements the CRUD actions for BayarJmDokter model.
 */
class BayarJmDokterController extends Controller
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
     * Lists all BayarJmDokter models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new modelsBayarJmDokterSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BayarJmDokter model.
     * @param string $no_bayar No Bayar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_bayar)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_bayar),
        ]);
    }

    /**
     * Creates a new BayarJmDokter model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BayarJmDokter();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_bayar' => $model->no_bayar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BayarJmDokter model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_bayar No Bayar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_bayar)
    {
        $model = $this->findModel($no_bayar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_bayar' => $model->no_bayar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BayarJmDokter model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_bayar No Bayar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_bayar)
    {
        $this->findModel($no_bayar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BayarJmDokter model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_bayar No Bayar
     * @return BayarJmDokter the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_bayar)
    {
        if (($model = BayarJmDokter::findOne(['no_bayar' => $no_bayar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
