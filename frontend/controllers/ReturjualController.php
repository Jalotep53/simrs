<?php

namespace frontend\controllers;

use frontend\models\Returjual;
use frontend\models\ReturjualSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReturjualController implements the CRUD actions for Returjual model.
 */
class ReturjualController extends Controller
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
     * Lists all Returjual models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ReturjualSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Returjual model.
     * @param string $no_retur_jual No Retur Jual
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_retur_jual)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_retur_jual),
        ]);
    }

    /**
     * Creates a new Returjual model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Returjual();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_retur_jual' => $model->no_retur_jual]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Returjual model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_retur_jual No Retur Jual
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_retur_jual)
    {
        $model = $this->findModel($no_retur_jual);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_retur_jual' => $model->no_retur_jual]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Returjual model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_retur_jual No Retur Jual
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_retur_jual)
    {
        $this->findModel($no_retur_jual)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Returjual model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_retur_jual No Retur Jual
     * @return Returjual the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_retur_jual)
    {
        if (($model = Returjual::findOne(['no_retur_jual' => $no_retur_jual])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
