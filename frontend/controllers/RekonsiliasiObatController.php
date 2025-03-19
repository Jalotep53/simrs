<?php

namespace frontend\controllers;

use frontend\models\RekonsiliasiObat;
use frontend\models\RekonsiliasiObatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RekonsiliasiObatController implements the CRUD actions for RekonsiliasiObat model.
 */
class RekonsiliasiObatController extends Controller
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
     * Lists all RekonsiliasiObat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RekonsiliasiObatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RekonsiliasiObat model.
     * @param string $no_rekonsiliasi No Rekonsiliasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rekonsiliasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rekonsiliasi),
        ]);
    }

    /**
     * Creates a new RekonsiliasiObat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RekonsiliasiObat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rekonsiliasi' => $model->no_rekonsiliasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RekonsiliasiObat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rekonsiliasi No Rekonsiliasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rekonsiliasi)
    {
        $model = $this->findModel($no_rekonsiliasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rekonsiliasi' => $model->no_rekonsiliasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RekonsiliasiObat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rekonsiliasi No Rekonsiliasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rekonsiliasi)
    {
        $this->findModel($no_rekonsiliasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RekonsiliasiObat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rekonsiliasi No Rekonsiliasi
     * @return RekonsiliasiObat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rekonsiliasi)
    {
        if (($model = RekonsiliasiObat::findOne(['no_rekonsiliasi' => $no_rekonsiliasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
