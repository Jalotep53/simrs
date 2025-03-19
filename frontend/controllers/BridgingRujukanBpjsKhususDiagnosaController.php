<?php

namespace frontend\controllers;

use frontend\models\BridgingRujukanBpjsKhususDiagnosa;
use frontend\models\BridgingRujukanBpjsKhususDiagnosaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BridgingRujukanBpjsKhususDiagnosaController implements the CRUD actions for BridgingRujukanBpjsKhususDiagnosa model.
 */
class BridgingRujukanBpjsKhususDiagnosaController extends Controller
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
     * Lists all BridgingRujukanBpjsKhususDiagnosa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BridgingRujukanBpjsKhususDiagnosaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BridgingRujukanBpjsKhususDiagnosa model.
     * @param string $no_rujukan No Rujukan
     * @param string $kode_diagnosa Kode Diagnosa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rujukan, $kode_diagnosa)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rujukan, $kode_diagnosa),
        ]);
    }

    /**
     * Creates a new BridgingRujukanBpjsKhususDiagnosa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BridgingRujukanBpjsKhususDiagnosa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rujukan' => $model->no_rujukan, 'kode_diagnosa' => $model->kode_diagnosa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BridgingRujukanBpjsKhususDiagnosa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rujukan No Rujukan
     * @param string $kode_diagnosa Kode Diagnosa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rujukan, $kode_diagnosa)
    {
        $model = $this->findModel($no_rujukan, $kode_diagnosa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rujukan' => $model->no_rujukan, 'kode_diagnosa' => $model->kode_diagnosa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BridgingRujukanBpjsKhususDiagnosa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rujukan No Rujukan
     * @param string $kode_diagnosa Kode Diagnosa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rujukan, $kode_diagnosa)
    {
        $this->findModel($no_rujukan, $kode_diagnosa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BridgingRujukanBpjsKhususDiagnosa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rujukan No Rujukan
     * @param string $kode_diagnosa Kode Diagnosa
     * @return BridgingRujukanBpjsKhususDiagnosa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rujukan, $kode_diagnosa)
    {
        if (($model = BridgingRujukanBpjsKhususDiagnosa::findOne(['no_rujukan' => $no_rujukan, 'kode_diagnosa' => $kode_diagnosa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
