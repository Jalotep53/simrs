<?php

namespace frontend\controllers;

use frontend\models\BridgingInhealth;
use frontend\models\BridgingInhealthSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BridgingInhealthController implements the CRUD actions for BridgingInhealth model.
 */
class BridgingInhealthController extends Controller
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
     * Lists all BridgingInhealth models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BridgingInhealthSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BridgingInhealth model.
     * @param string $no_sjp No Sjp
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_sjp)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_sjp),
        ]);
    }

    /**
     * Creates a new BridgingInhealth model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BridgingInhealth();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_sjp' => $model->no_sjp]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BridgingInhealth model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_sjp No Sjp
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_sjp)
    {
        $model = $this->findModel($no_sjp);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_sjp' => $model->no_sjp]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BridgingInhealth model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_sjp No Sjp
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_sjp)
    {
        $this->findModel($no_sjp)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BridgingInhealth model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_sjp No Sjp
     * @return BridgingInhealth the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_sjp)
    {
        if (($model = BridgingInhealth::findOne(['no_sjp' => $no_sjp])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
