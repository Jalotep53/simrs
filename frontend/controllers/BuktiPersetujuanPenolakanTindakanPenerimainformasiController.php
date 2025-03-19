<?php

namespace frontend\controllers;

use frontend\models\BuktiPersetujuanPenolakanTindakanPenerimainformasi;
use frontend\models\BuktiPersetujuanPenolakanTindakanPenerimainformasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BuktiPersetujuanPenolakanTindakanPenerimainformasiController implements the CRUD actions for BuktiPersetujuanPenolakanTindakanPenerimainformasi model.
 */
class BuktiPersetujuanPenolakanTindakanPenerimainformasiController extends Controller
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
     * Lists all BuktiPersetujuanPenolakanTindakanPenerimainformasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BuktiPersetujuanPenolakanTindakanPenerimainformasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BuktiPersetujuanPenolakanTindakanPenerimainformasi model.
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
     * Creates a new BuktiPersetujuanPenolakanTindakanPenerimainformasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BuktiPersetujuanPenolakanTindakanPenerimainformasi();

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
     * Updates an existing BuktiPersetujuanPenolakanTindakanPenerimainformasi model.
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
     * Deletes an existing BuktiPersetujuanPenolakanTindakanPenerimainformasi model.
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
     * Finds the BuktiPersetujuanPenolakanTindakanPenerimainformasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_pernyataan No Pernyataan
     * @return BuktiPersetujuanPenolakanTindakanPenerimainformasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_pernyataan)
    {
        if (($model = BuktiPersetujuanPenolakanTindakanPenerimainformasi::findOne(['no_pernyataan' => $no_pernyataan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
