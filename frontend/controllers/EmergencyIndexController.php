<?php

namespace frontend\controllers;

use frontend\models\EmergencyIndex;
use frontend\models\EmergencyIndexSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EmergencyIndexController implements the CRUD actions for EmergencyIndex model.
 */
class EmergencyIndexController extends Controller
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
     * Lists all EmergencyIndex models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EmergencyIndexSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EmergencyIndex model.
     * @param string $kode_emergency Kode Emergency
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_emergency)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_emergency),
        ]);
    }

    /**
     * Creates a new EmergencyIndex model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new EmergencyIndex();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_emergency' => $model->kode_emergency]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EmergencyIndex model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_emergency Kode Emergency
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_emergency)
    {
        $model = $this->findModel($kode_emergency);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_emergency' => $model->kode_emergency]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EmergencyIndex model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_emergency Kode Emergency
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_emergency)
    {
        $this->findModel($kode_emergency)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EmergencyIndex model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_emergency Kode Emergency
     * @return EmergencyIndex the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_emergency)
    {
        if (($model = EmergencyIndex::findOne(['kode_emergency' => $kode_emergency])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
