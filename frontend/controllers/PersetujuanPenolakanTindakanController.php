<?php

namespace frontend\controllers;

use frontend\models\PersetujuanPenolakanTindakan;
use frontend\models\PersetujuanPenolakanTindakanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersetujuanPenolakanTindakanController implements the CRUD actions for PersetujuanPenolakanTindakan model.
 */
class PersetujuanPenolakanTindakanController extends Controller
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
     * Lists all PersetujuanPenolakanTindakan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PersetujuanPenolakanTindakanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PersetujuanPenolakanTindakan model.
     * @param string $no_pernyataan No Pernyataan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_pernyataan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_pernyataan),
        ]);
    }

    /**
     * Creates a new PersetujuanPenolakanTindakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PersetujuanPenolakanTindakan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_pernyataan' => $model->no_pernyataan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PersetujuanPenolakanTindakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_pernyataan No Pernyataan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_pernyataan)
    {
        $model = $this->findModel($no_pernyataan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_pernyataan' => $model->no_pernyataan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PersetujuanPenolakanTindakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_pernyataan No Pernyataan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_pernyataan)
    {
        $this->findModel($no_pernyataan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PersetujuanPenolakanTindakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_pernyataan No Pernyataan
     * @return PersetujuanPenolakanTindakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_pernyataan)
    {
        if (($model = PersetujuanPenolakanTindakan::findOne(['no_pernyataan' => $no_pernyataan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
