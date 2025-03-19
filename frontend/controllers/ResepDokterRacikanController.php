<?php

namespace frontend\controllers;

use frontend\models\ResepDokterRacikan;
use frontend\models\ResepDokterRacikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResepDokterRacikanController implements the CRUD actions for ResepDokterRacikan model.
 */
class ResepDokterRacikanController extends Controller
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
     * Lists all ResepDokterRacikan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ResepDokterRacikanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResepDokterRacikan model.
     * @param string $no_resep No Resep
     * @param string $no_racik No Racik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_resep, $no_racik)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_resep, $no_racik),
        ]);
    }

    /**
     * Creates a new ResepDokterRacikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ResepDokterRacikan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_resep' => $model->no_resep, 'no_racik' => $model->no_racik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ResepDokterRacikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_resep No Resep
     * @param string $no_racik No Racik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_resep, $no_racik)
    {
        $model = $this->findModel($no_resep, $no_racik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_resep' => $model->no_resep, 'no_racik' => $model->no_racik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ResepDokterRacikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_resep No Resep
     * @param string $no_racik No Racik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_resep, $no_racik)
    {
        $this->findModel($no_resep, $no_racik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResepDokterRacikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_resep No Resep
     * @param string $no_racik No Racik
     * @return ResepDokterRacikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_resep, $no_racik)
    {
        if (($model = ResepDokterRacikan::findOne(['no_resep' => $no_resep, 'no_racik' => $no_racik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
