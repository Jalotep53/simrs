<?php

namespace frontend\controllers;

use frontend\models\SetAkunBankjateng;
use frontend\models\SetAkunBankjatengSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetAkunBankjatengController implements the CRUD actions for SetAkunBankjateng model.
 */
class SetAkunBankjatengController extends Controller
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
     * Lists all SetAkunBankjateng models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetAkunBankjatengSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetAkunBankjateng model.
     * @param string $kd_rek Kd Rek
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_rek)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_rek),
        ]);
    }

    /**
     * Creates a new SetAkunBankjateng model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetAkunBankjateng();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_rek' => $model->kd_rek]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetAkunBankjateng model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_rek Kd Rek
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_rek)
    {
        $model = $this->findModel($kd_rek);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_rek' => $model->kd_rek]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetAkunBankjateng model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_rek Kd Rek
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_rek)
    {
        $this->findModel($kd_rek)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetAkunBankjateng model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_rek Kd Rek
     * @return SetAkunBankjateng the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_rek)
    {
        if (($model = SetAkunBankjateng::findOne(['kd_rek' => $kd_rek])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
