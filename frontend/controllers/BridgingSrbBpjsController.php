<?php

namespace frontend\controllers;

use frontend\models\BridgingSrbBpjs;
use frontend\models\BridgingSrbBpjsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BridgingSrbBpjsController implements the CRUD actions for BridgingSrbBpjs model.
 */
class BridgingSrbBpjsController extends Controller
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
     * Lists all BridgingSrbBpjs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BridgingSrbBpjsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BridgingSrbBpjs model.
     * @param string $no_sep No Sep
     * @param string $no_srb No Srb
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_sep, $no_srb)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_sep, $no_srb),
        ]);
    }

    /**
     * Creates a new BridgingSrbBpjs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BridgingSrbBpjs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_sep' => $model->no_sep, 'no_srb' => $model->no_srb]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BridgingSrbBpjs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_sep No Sep
     * @param string $no_srb No Srb
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_sep, $no_srb)
    {
        $model = $this->findModel($no_sep, $no_srb);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_sep' => $model->no_sep, 'no_srb' => $model->no_srb]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BridgingSrbBpjs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_sep No Sep
     * @param string $no_srb No Srb
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_sep, $no_srb)
    {
        $this->findModel($no_sep, $no_srb)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BridgingSrbBpjs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_sep No Sep
     * @param string $no_srb No Srb
     * @return BridgingSrbBpjs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_sep, $no_srb)
    {
        if (($model = BridgingSrbBpjs::findOne(['no_sep' => $no_sep, 'no_srb' => $no_srb])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
