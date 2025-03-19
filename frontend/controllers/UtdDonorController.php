<?php

namespace frontend\controllers;

use frontend\models\UtdDonor;
use frontend\models\UtdDonorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtdDonorController implements the CRUD actions for UtdDonor model.
 */
class UtdDonorController extends Controller
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
     * Lists all UtdDonor models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtdDonorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UtdDonor model.
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
     * Creates a new UtdDonor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UtdDonor();

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
     * Updates an existing UtdDonor model.
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
     * Deletes an existing UtdDonor model.
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
     * Finds the UtdDonor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_donor No Donor
     * @return UtdDonor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_donor)
    {
        if (($model = UtdDonor::findOne(['no_donor' => $no_donor])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
