<?php

namespace frontend\controllers;

use frontend\models\BridgingRujukanBpjsKhususProsedur;
use frontend\models\BridgingRujukanBpjsKhususProsedurSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BridgingRujukanBpjsKhususProsedurController implements the CRUD actions for BridgingRujukanBpjsKhususProsedur model.
 */
class BridgingRujukanBpjsKhususProsedurController extends Controller
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
     * Lists all BridgingRujukanBpjsKhususProsedur models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BridgingRujukanBpjsKhususProsedurSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BridgingRujukanBpjsKhususProsedur model.
     * @param string $no_rujukan No Rujukan
     * @param string $kode_prosedur Kode Prosedur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rujukan, $kode_prosedur)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rujukan, $kode_prosedur),
        ]);
    }

    /**
     * Creates a new BridgingRujukanBpjsKhususProsedur model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BridgingRujukanBpjsKhususProsedur();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rujukan' => $model->no_rujukan, 'kode_prosedur' => $model->kode_prosedur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BridgingRujukanBpjsKhususProsedur model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rujukan No Rujukan
     * @param string $kode_prosedur Kode Prosedur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rujukan, $kode_prosedur)
    {
        $model = $this->findModel($no_rujukan, $kode_prosedur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rujukan' => $model->no_rujukan, 'kode_prosedur' => $model->kode_prosedur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BridgingRujukanBpjsKhususProsedur model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rujukan No Rujukan
     * @param string $kode_prosedur Kode Prosedur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rujukan, $kode_prosedur)
    {
        $this->findModel($no_rujukan, $kode_prosedur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BridgingRujukanBpjsKhususProsedur model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rujukan No Rujukan
     * @param string $kode_prosedur Kode Prosedur
     * @return BridgingRujukanBpjsKhususProsedur the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rujukan, $kode_prosedur)
    {
        if (($model = BridgingRujukanBpjsKhususProsedur::findOne(['no_rujukan' => $no_rujukan, 'kode_prosedur' => $kode_prosedur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
