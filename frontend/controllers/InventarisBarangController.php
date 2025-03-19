<?php

namespace frontend\controllers;

use frontend\models\InventarisBarang;
use frontend\models\InventarisBarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InventarisBarangController implements the CRUD actions for InventarisBarang model.
 */
class InventarisBarangController extends Controller
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
     * Lists all InventarisBarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InventarisBarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InventarisBarang model.
     * @param string $kode_barang Kode Barang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_barang)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_barang),
        ]);
    }

    /**
     * Creates a new InventarisBarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InventarisBarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_barang' => $model->kode_barang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InventarisBarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_barang Kode Barang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_barang)
    {
        $model = $this->findModel($kode_barang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_barang' => $model->kode_barang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InventarisBarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_barang Kode Barang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_barang)
    {
        $this->findModel($kode_barang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InventarisBarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_barang Kode Barang
     * @return InventarisBarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_barang)
    {
        if (($model = InventarisBarang::findOne(['kode_barang' => $kode_barang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
