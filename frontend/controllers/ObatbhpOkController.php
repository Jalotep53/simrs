<?php

namespace frontend\controllers;

use frontend\models\ObatbhpOk;
use frontend\models\ObatbhpOkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ObatbhpOkController implements the CRUD actions for ObatbhpOk model.
 */
class ObatbhpOkController extends Controller
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
     * Lists all ObatbhpOk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ObatbhpOkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ObatbhpOk model.
     * @param string $kd_obat Kd Obat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_obat)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_obat),
        ]);
    }

    /**
     * Creates a new ObatbhpOk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ObatbhpOk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_obat' => $model->kd_obat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ObatbhpOk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_obat Kd Obat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_obat)
    {
        $model = $this->findModel($kd_obat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_obat' => $model->kd_obat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ObatbhpOk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_obat Kd Obat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_obat)
    {
        $this->findModel($kd_obat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ObatbhpOk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_obat Kd Obat
     * @return ObatbhpOk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_obat)
    {
        if (($model = ObatbhpOk::findOne(['kd_obat' => $kd_obat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
