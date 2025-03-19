<?php

namespace frontend\controllers;

use frontend\models\ParkirBarcode;
use frontend\models\ParkirBarcodeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ParkirBarcodeController implements the CRUD actions for ParkirBarcode model.
 */
class ParkirBarcodeController extends Controller
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
     * Lists all ParkirBarcode models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ParkirBarcodeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ParkirBarcode model.
     * @param string $kode_barcode Kode Barcode
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_barcode)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_barcode),
        ]);
    }

    /**
     * Creates a new ParkirBarcode model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ParkirBarcode();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_barcode' => $model->kode_barcode]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ParkirBarcode model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_barcode Kode Barcode
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_barcode)
    {
        $model = $this->findModel($kode_barcode);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_barcode' => $model->kode_barcode]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ParkirBarcode model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_barcode Kode Barcode
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_barcode)
    {
        $this->findModel($kode_barcode)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ParkirBarcode model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_barcode Kode Barcode
     * @return ParkirBarcode the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_barcode)
    {
        if (($model = ParkirBarcode::findOne(['kode_barcode' => $kode_barcode])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
