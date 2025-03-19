<?php

namespace frontend\controllers;

use frontend\models\TemplatePemeriksaanDokterResepRacikan;
use frontend\models\TemplatePemeriksaanDokterResepRacikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TemplatePemeriksaanDokterResepRacikanController implements the CRUD actions for TemplatePemeriksaanDokterResepRacikan model.
 */
class TemplatePemeriksaanDokterResepRacikanController extends Controller
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
     * Lists all TemplatePemeriksaanDokterResepRacikan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TemplatePemeriksaanDokterResepRacikanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TemplatePemeriksaanDokterResepRacikan model.
     * @param string $no_template No Template
     * @param string $no_racik No Racik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_template, $no_racik)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_template, $no_racik),
        ]);
    }

    /**
     * Creates a new TemplatePemeriksaanDokterResepRacikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TemplatePemeriksaanDokterResepRacikan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_template' => $model->no_template, 'no_racik' => $model->no_racik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TemplatePemeriksaanDokterResepRacikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_template No Template
     * @param string $no_racik No Racik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_template, $no_racik)
    {
        $model = $this->findModel($no_template, $no_racik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_template' => $model->no_template, 'no_racik' => $model->no_racik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TemplatePemeriksaanDokterResepRacikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_template No Template
     * @param string $no_racik No Racik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_template, $no_racik)
    {
        $this->findModel($no_template, $no_racik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TemplatePemeriksaanDokterResepRacikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_template No Template
     * @param string $no_racik No Racik
     * @return TemplatePemeriksaanDokterResepRacikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_template, $no_racik)
    {
        if (($model = TemplatePemeriksaanDokterResepRacikan::findOne(['no_template' => $no_template, 'no_racik' => $no_racik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
