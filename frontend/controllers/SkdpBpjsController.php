<?php

namespace frontend\controllers;

use frontend\models\SkdpBpjs;
use frontend\models\SkdpBpjsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkdpBpjsController implements the CRUD actions for SkdpBpjs model.
 */
class SkdpBpjsController extends Controller
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
     * Lists all SkdpBpjs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SkdpBpjsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkdpBpjs model.
     * @param string $tahun Tahun
     * @param string $no_antrian No Antrian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tahun, $no_antrian)
    {
        return $this->render('view', [
            'model' => $this->findModel($tahun, $no_antrian),
        ]);
    }

    /**
     * Creates a new SkdpBpjs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SkdpBpjs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tahun' => $model->tahun, 'no_antrian' => $model->no_antrian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SkdpBpjs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tahun Tahun
     * @param string $no_antrian No Antrian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tahun, $no_antrian)
    {
        $model = $this->findModel($tahun, $no_antrian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tahun' => $model->tahun, 'no_antrian' => $model->no_antrian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SkdpBpjs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tahun Tahun
     * @param string $no_antrian No Antrian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tahun, $no_antrian)
    {
        $this->findModel($tahun, $no_antrian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SkdpBpjs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tahun Tahun
     * @param string $no_antrian No Antrian
     * @return SkdpBpjs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tahun, $no_antrian)
    {
        if (($model = SkdpBpjs::findOne(['tahun' => $tahun, 'no_antrian' => $no_antrian])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
