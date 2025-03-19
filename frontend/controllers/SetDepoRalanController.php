<?php

namespace frontend\controllers;

use frontend\models\SetDepoRalan;
use frontend\models\SetDepoRalanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetDepoRalanController implements the CRUD actions for SetDepoRalan model.
 */
class SetDepoRalanController extends Controller
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
     * Lists all SetDepoRalan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetDepoRalanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetDepoRalan model.
     * @param string $kd_poli Kd Poli
     * @param string $kd_bangsal Kd Bangsal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_poli, $kd_bangsal)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_poli, $kd_bangsal),
        ]);
    }

    /**
     * Creates a new SetDepoRalan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetDepoRalan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_poli' => $model->kd_poli, 'kd_bangsal' => $model->kd_bangsal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetDepoRalan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_poli Kd Poli
     * @param string $kd_bangsal Kd Bangsal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_poli, $kd_bangsal)
    {
        $model = $this->findModel($kd_poli, $kd_bangsal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_poli' => $model->kd_poli, 'kd_bangsal' => $model->kd_bangsal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetDepoRalan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_poli Kd Poli
     * @param string $kd_bangsal Kd Bangsal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_poli, $kd_bangsal)
    {
        $this->findModel($kd_poli, $kd_bangsal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetDepoRalan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_poli Kd Poli
     * @param string $kd_bangsal Kd Bangsal
     * @return SetDepoRalan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_poli, $kd_bangsal)
    {
        if (($model = SetDepoRalan::findOne(['kd_poli' => $kd_poli, 'kd_bangsal' => $kd_bangsal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
