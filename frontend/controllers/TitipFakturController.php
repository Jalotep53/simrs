<?php

namespace frontend\controllers;

use frontend\models\TitipFaktur;
use frontend\models\TitipFakturSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TitipFakturController implements the CRUD actions for TitipFaktur model.
 */
class TitipFakturController extends Controller
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
     * Lists all TitipFaktur models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TitipFakturSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TitipFaktur model.
     * @param string $no_tagihan No Tagihan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_tagihan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_tagihan),
        ]);
    }

    /**
     * Creates a new TitipFaktur model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TitipFaktur();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_tagihan' => $model->no_tagihan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TitipFaktur model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_tagihan No Tagihan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_tagihan)
    {
        $model = $this->findModel($no_tagihan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_tagihan' => $model->no_tagihan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TitipFaktur model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_tagihan No Tagihan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_tagihan)
    {
        $this->findModel($no_tagihan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TitipFaktur model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_tagihan No Tagihan
     * @return TitipFaktur the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_tagihan)
    {
        if (($model = TitipFaktur::findOne(['no_tagihan' => $no_tagihan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
