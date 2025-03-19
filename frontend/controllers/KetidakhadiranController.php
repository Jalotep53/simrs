<?php

namespace frontend\controllers;

use frontend\models\Ketidakhadiran;
use frontend\models\KetidakhadiranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KetidakhadiranController implements the CRUD actions for Ketidakhadiran model.
 */
class KetidakhadiranController extends Controller
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
     * Lists all Ketidakhadiran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KetidakhadiranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ketidakhadiran model.
     * @param string $tgl Tgl
     * @param int $id ID
     * @param string $jns Jns
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl, $id, $jns)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl, $id, $jns),
        ]);
    }

    /**
     * Creates a new Ketidakhadiran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ketidakhadiran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl' => $model->tgl, 'id' => $model->id, 'jns' => $model->jns]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ketidakhadiran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl Tgl
     * @param int $id ID
     * @param string $jns Jns
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl, $id, $jns)
    {
        $model = $this->findModel($tgl, $id, $jns);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl' => $model->tgl, 'id' => $model->id, 'jns' => $model->jns]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ketidakhadiran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl Tgl
     * @param int $id ID
     * @param string $jns Jns
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl, $id, $jns)
    {
        $this->findModel($tgl, $id, $jns)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ketidakhadiran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl Tgl
     * @param int $id ID
     * @param string $jns Jns
     * @return Ketidakhadiran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl, $id, $jns)
    {
        if (($model = Ketidakhadiran::findOne(['tgl' => $tgl, 'id' => $id, 'jns' => $jns])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
