<?php

namespace frontend\controllers;

use frontend\models\UtdPemisahanKomponen;
use frontend\models\UtdPemisahanKomponenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtdPemisahanKomponenController implements the CRUD actions for UtdPemisahanKomponen model.
 */
class UtdPemisahanKomponenController extends Controller
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
     * Lists all UtdPemisahanKomponen models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtdPemisahanKomponenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UtdPemisahanKomponen model.
     * @param string $no_donor No Donor
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_donor)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_donor),
        ]);
    }

    /**
     * Creates a new UtdPemisahanKomponen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UtdPemisahanKomponen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_donor' => $model->no_donor]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UtdPemisahanKomponen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_donor No Donor
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_donor)
    {
        $model = $this->findModel($no_donor);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_donor' => $model->no_donor]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UtdPemisahanKomponen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_donor No Donor
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_donor)
    {
        $this->findModel($no_donor)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UtdPemisahanKomponen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_donor No Donor
     * @return UtdPemisahanKomponen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_donor)
    {
        if (($model = UtdPemisahanKomponen::findOne(['no_donor' => $no_donor])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
