<?php

namespace frontend\controllers;

use frontend\models\InventarisDetailBeli;
use frontend\models\InventarisDetailBeliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InventarisDetailBeliController implements the CRUD actions for InventarisDetailBeli model.
 */
class InventarisDetailBeliController extends Controller
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
     * Lists all InventarisDetailBeli models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InventarisDetailBeliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InventarisDetailBeli model.
     * @param string $no_faktur No Faktur
     * @param string $kode_barang Kode Barang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_faktur, $kode_barang)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_faktur, $kode_barang),
        ]);
    }

    /**
     * Creates a new InventarisDetailBeli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InventarisDetailBeli();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_faktur' => $model->no_faktur, 'kode_barang' => $model->kode_barang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InventarisDetailBeli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_faktur No Faktur
     * @param string $kode_barang Kode Barang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_faktur, $kode_barang)
    {
        $model = $this->findModel($no_faktur, $kode_barang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_faktur' => $model->no_faktur, 'kode_barang' => $model->kode_barang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InventarisDetailBeli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_faktur No Faktur
     * @param string $kode_barang Kode Barang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_faktur, $kode_barang)
    {
        $this->findModel($no_faktur, $kode_barang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InventarisDetailBeli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_faktur No Faktur
     * @param string $kode_barang Kode Barang
     * @return InventarisDetailBeli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_faktur, $kode_barang)
    {
        if (($model = InventarisDetailBeli::findOne(['no_faktur' => $no_faktur, 'kode_barang' => $kode_barang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
