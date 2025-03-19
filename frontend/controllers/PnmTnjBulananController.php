<?php

namespace frontend\controllers;

use frontend\models\PnmTnjBulanan;
use frontend\models\PnmTnjBulananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PnmTnjBulananController implements the CRUD actions for PnmTnjBulanan model.
 */
class PnmTnjBulananController extends Controller
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
     * Lists all PnmTnjBulanan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PnmTnjBulananSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PnmTnjBulanan model.
     * @param int $id ID
     * @param int $id_tnj Id Tnj
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $id_tnj)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $id_tnj),
        ]);
    }

    /**
     * Creates a new PnmTnjBulanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PnmTnjBulanan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'id_tnj' => $model->id_tnj]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PnmTnjBulanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param int $id_tnj Id Tnj
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $id_tnj)
    {
        $model = $this->findModel($id, $id_tnj);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'id_tnj' => $model->id_tnj]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PnmTnjBulanan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param int $id_tnj Id Tnj
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $id_tnj)
    {
        $this->findModel($id, $id_tnj)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PnmTnjBulanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param int $id_tnj Id Tnj
     * @return PnmTnjBulanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $id_tnj)
    {
        if (($model = PnmTnjBulanan::findOne(['id' => $id, 'id_tnj' => $id_tnj])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
