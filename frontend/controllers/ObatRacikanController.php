<?php

namespace frontend\controllers;

use frontend\models\ObatRacikan;
use frontend\models\ObatRacikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ObatRacikanController implements the CRUD actions for ObatRacikan model.
 */
class ObatRacikanController extends Controller
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
     * Lists all ObatRacikan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ObatRacikanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ObatRacikan model.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $no_racik No Racik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl_perawatan, $jam, $no_rawat, $no_racik)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl_perawatan, $jam, $no_rawat, $no_racik),
        ]);
    }

    /**
     * Creates a new ObatRacikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ObatRacikan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ObatRacikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $no_racik No Racik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl_perawatan, $jam, $no_rawat, $no_racik)
    {
        $model = $this->findModel($tgl_perawatan, $jam, $no_rawat, $no_racik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ObatRacikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $no_racik No Racik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl_perawatan, $jam, $no_rawat, $no_racik)
    {
        $this->findModel($tgl_perawatan, $jam, $no_rawat, $no_racik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ObatRacikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $no_racik No Racik
     * @return ObatRacikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl_perawatan, $jam, $no_rawat, $no_racik)
    {
        if (($model = ObatRacikan::findOne(['tgl_perawatan' => $tgl_perawatan, 'jam' => $jam, 'no_rawat' => $no_rawat, 'no_racik' => $no_racik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
