<?php

namespace frontend\controllers;

use frontend\models\UtdDetailPemisahanKomponen;
use frontend\models\UtdDetailPemisahanKomponenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtdDetailPemisahanKomponenController implements the CRUD actions for UtdDetailPemisahanKomponen model.
 */
class UtdDetailPemisahanKomponenController extends Controller
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
     * Lists all UtdDetailPemisahanKomponen models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtdDetailPemisahanKomponenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UtdDetailPemisahanKomponen model.
     * @param string $no_kantong No Kantong
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_kantong)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_kantong),
        ]);
    }

    /**
     * Creates a new UtdDetailPemisahanKomponen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UtdDetailPemisahanKomponen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_kantong' => $model->no_kantong]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UtdDetailPemisahanKomponen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_kantong No Kantong
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_kantong)
    {
        $model = $this->findModel($no_kantong);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_kantong' => $model->no_kantong]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UtdDetailPemisahanKomponen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_kantong No Kantong
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_kantong)
    {
        $this->findModel($no_kantong)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UtdDetailPemisahanKomponen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_kantong No Kantong
     * @return UtdDetailPemisahanKomponen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_kantong)
    {
        if (($model = UtdDetailPemisahanKomponen::findOne(['no_kantong' => $no_kantong])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
