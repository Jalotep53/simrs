<?php

namespace frontend\controllers;

use frontend\models\Tokosuplier;
use frontend\models\TokosuplierSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TokosuplierController implements the CRUD actions for Tokosuplier model.
 */
class TokosuplierController extends Controller
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
     * Lists all Tokosuplier models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TokosuplierSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tokosuplier model.
     * @param string $kode_suplier Kode Suplier
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_suplier)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_suplier),
        ]);
    }

    /**
     * Creates a new Tokosuplier model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tokosuplier();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_suplier' => $model->kode_suplier]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tokosuplier model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_suplier Kode Suplier
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_suplier)
    {
        $model = $this->findModel($kode_suplier);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_suplier' => $model->kode_suplier]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tokosuplier model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_suplier Kode Suplier
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_suplier)
    {
        $this->findModel($kode_suplier)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tokosuplier model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_suplier Kode Suplier
     * @return Tokosuplier the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_suplier)
    {
        if (($model = Tokosuplier::findOne(['kode_suplier' => $kode_suplier])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
