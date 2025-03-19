<?php

namespace frontend\controllers;

use frontend\models\PerbaikanInventaris;
use frontend\models\PerbaikanInventarisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerbaikanInventarisController implements the CRUD actions for PerbaikanInventaris model.
 */
class PerbaikanInventarisController extends Controller
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
     * Lists all PerbaikanInventaris models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerbaikanInventarisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerbaikanInventaris model.
     * @param string $no_permintaan No Permintaan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_permintaan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_permintaan),
        ]);
    }

    /**
     * Creates a new PerbaikanInventaris model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerbaikanInventaris();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_permintaan' => $model->no_permintaan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerbaikanInventaris model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_permintaan No Permintaan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_permintaan)
    {
        $model = $this->findModel($no_permintaan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_permintaan' => $model->no_permintaan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerbaikanInventaris model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_permintaan No Permintaan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_permintaan)
    {
        $this->findModel($no_permintaan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerbaikanInventaris model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_permintaan No Permintaan
     * @return PerbaikanInventaris the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_permintaan)
    {
        if (($model = PerbaikanInventaris::findOne(['no_permintaan' => $no_permintaan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
