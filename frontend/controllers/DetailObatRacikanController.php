<?php

namespace frontend\controllers;

use frontend\models\DetailObatRacikan;
use frontend\models\DetailObatRacikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailObatRacikanController implements the CRUD actions for DetailObatRacikan model.
 */
class DetailObatRacikanController extends Controller
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
     * Lists all DetailObatRacikan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DetailObatRacikanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailObatRacikan model.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $no_racik No Racik
     * @param string $kode_brng Kode Brng
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl_perawatan, $jam, $no_rawat, $no_racik, $kode_brng)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl_perawatan, $jam, $no_rawat, $no_racik, $kode_brng),
        ]);
    }

    /**
     * Creates a new DetailObatRacikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DetailObatRacikan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailObatRacikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $no_racik No Racik
     * @param string $kode_brng Kode Brng
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl_perawatan, $jam, $no_rawat, $no_racik, $kode_brng)
    {
        $model = $this->findModel($tgl_perawatan, $jam, $no_rawat, $no_racik, $kode_brng);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailObatRacikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $no_racik No Racik
     * @param string $kode_brng Kode Brng
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl_perawatan, $jam, $no_rawat, $no_racik, $kode_brng)
    {
        $this->findModel($tgl_perawatan, $jam, $no_rawat, $no_racik, $kode_brng)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailObatRacikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $no_racik No Racik
     * @param string $kode_brng Kode Brng
     * @return DetailObatRacikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl_perawatan, $jam, $no_rawat, $no_racik, $kode_brng)
    {
        if (($model = DetailObatRacikan::findOne(['tgl_perawatan' => $tgl_perawatan, 'jam' => $jam, 'no_rawat' => $no_rawat, 'no_racik' => $no_racik, 'kode_brng' => $kode_brng])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
