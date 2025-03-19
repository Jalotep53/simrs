<?php

namespace frontend\controllers;

use frontend\models\BridgingRujukanBpjs;
use frontend\models\BridgingRujukanBpjsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BridgingRujukanBpjsController implements the CRUD actions for BridgingRujukanBpjs model.
 */
class BridgingRujukanBpjsController extends Controller
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
     * Lists all BridgingRujukanBpjs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BridgingRujukanBpjsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BridgingRujukanBpjs model.
     * @param string $no_rujukan No Rujukan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rujukan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rujukan),
        ]);
    }

    /**
     * Creates a new BridgingRujukanBpjs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BridgingRujukanBpjs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rujukan' => $model->no_rujukan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BridgingRujukanBpjs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rujukan No Rujukan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rujukan)
    {
        $model = $this->findModel($no_rujukan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rujukan' => $model->no_rujukan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BridgingRujukanBpjs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rujukan No Rujukan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rujukan)
    {
        $this->findModel($no_rujukan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BridgingRujukanBpjs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rujukan No Rujukan
     * @return BridgingRujukanBpjs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rujukan)
    {
        if (($model = BridgingRujukanBpjs::findOne(['no_rujukan' => $no_rujukan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
