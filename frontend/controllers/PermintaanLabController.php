<?php

namespace frontend\controllers;

use frontend\models\PermintaanLab;
use frontend\models\PermintaanLabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PermintaanLabController implements the CRUD actions for PermintaanLab model.
 */
class PermintaanLabController extends Controller
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
     * Lists all PermintaanLab models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PermintaanLabSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PermintaanLab model.
     * @param string $noorder Noorder
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($noorder)
    {
        return $this->render('view', [
            'model' => $this->findModel($noorder),
        ]);
    }

    /**
     * Creates a new PermintaanLab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PermintaanLab();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'noorder' => $model->noorder]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PermintaanLab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $noorder Noorder
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($noorder)
    {
        $model = $this->findModel($noorder);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'noorder' => $model->noorder]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PermintaanLab model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $noorder Noorder
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($noorder)
    {
        $this->findModel($noorder)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PermintaanLab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $noorder Noorder
     * @return PermintaanLab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($noorder)
    {
        if (($model = PermintaanLab::findOne(['noorder' => $noorder])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
