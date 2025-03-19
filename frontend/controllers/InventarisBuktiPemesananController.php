<?php

namespace frontend\controllers;

use frontend\models\InventarisBuktiPemesanan;
use frontend\models\InventarisBuktiPemesananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InventarisBuktiPemesananController implements the CRUD actions for InventarisBuktiPemesanan model.
 */
class InventarisBuktiPemesananController extends Controller
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
     * Lists all InventarisBuktiPemesanan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InventarisBuktiPemesananSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InventarisBuktiPemesanan model.
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_faktur),
        ]);
    }

    /**
     * Creates a new InventarisBuktiPemesanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InventarisBuktiPemesanan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InventarisBuktiPemesanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_faktur)
    {
        $model = $this->findModel($no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InventarisBuktiPemesanan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_faktur)
    {
        $this->findModel($no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InventarisBuktiPemesanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_faktur No Faktur
     * @return InventarisBuktiPemesanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_faktur)
    {
        if (($model = InventarisBuktiPemesanan::findOne(['no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
