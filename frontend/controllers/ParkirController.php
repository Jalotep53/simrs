<?php

namespace frontend\controllers;

use frontend\models\Parkir;
use frontend\models\ParkirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ParkirController implements the CRUD actions for Parkir model.
 */
class ParkirController extends Controller
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
     * Lists all Parkir models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ParkirSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Parkir model.
     * @param string $no_kendaraan No Kendaraan
     * @param string $tgl_masuk Tgl Masuk
     * @param string $jam_masuk Jam Masuk
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_kendaraan, $tgl_masuk, $jam_masuk)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_kendaraan, $tgl_masuk, $jam_masuk),
        ]);
    }

    /**
     * Creates a new Parkir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Parkir();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_kendaraan' => $model->no_kendaraan, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Parkir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_kendaraan No Kendaraan
     * @param string $tgl_masuk Tgl Masuk
     * @param string $jam_masuk Jam Masuk
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_kendaraan, $tgl_masuk, $jam_masuk)
    {
        $model = $this->findModel($no_kendaraan, $tgl_masuk, $jam_masuk);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_kendaraan' => $model->no_kendaraan, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Parkir model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_kendaraan No Kendaraan
     * @param string $tgl_masuk Tgl Masuk
     * @param string $jam_masuk Jam Masuk
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_kendaraan, $tgl_masuk, $jam_masuk)
    {
        $this->findModel($no_kendaraan, $tgl_masuk, $jam_masuk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Parkir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_kendaraan No Kendaraan
     * @param string $tgl_masuk Tgl Masuk
     * @param string $jam_masuk Jam Masuk
     * @return Parkir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_kendaraan, $tgl_masuk, $jam_masuk)
    {
        if (($model = Parkir::findOne(['no_kendaraan' => $no_kendaraan, 'tgl_masuk' => $tgl_masuk, 'jam_masuk' => $jam_masuk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
