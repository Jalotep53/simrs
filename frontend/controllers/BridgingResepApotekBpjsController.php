<?php

namespace frontend\controllers;

use frontend\models\BridgingResepApotekBpjs;
use frontend\models\BridgingResepApotekBpjsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BridgingResepApotekBpjsController implements the CRUD actions for BridgingResepApotekBpjs model.
 */
class BridgingResepApotekBpjsController extends Controller
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
     * Lists all BridgingResepApotekBpjs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BridgingResepApotekBpjsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BridgingResepApotekBpjs model.
     * @param string $no_sep_apotek No Sep Apotek
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_sep_apotek)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_sep_apotek),
        ]);
    }

    /**
     * Creates a new BridgingResepApotekBpjs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BridgingResepApotekBpjs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_sep_apotek' => $model->no_sep_apotek]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BridgingResepApotekBpjs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_sep_apotek No Sep Apotek
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_sep_apotek)
    {
        $model = $this->findModel($no_sep_apotek);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_sep_apotek' => $model->no_sep_apotek]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BridgingResepApotekBpjs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_sep_apotek No Sep Apotek
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_sep_apotek)
    {
        $this->findModel($no_sep_apotek)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BridgingResepApotekBpjs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_sep_apotek No Sep Apotek
     * @return BridgingResepApotekBpjs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_sep_apotek)
    {
        if (($model = BridgingResepApotekBpjs::findOne(['no_sep_apotek' => $no_sep_apotek])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
