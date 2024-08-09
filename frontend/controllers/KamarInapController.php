<?php

namespace frontend\controllers;

use frontend\models\KamarInap;
use frontend\models\KamarInapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KamarInapController implements the CRUD actions for KamarInap model.
 */
class KamarInapController extends Controller
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
     * Lists all KamarInap models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KamarInapSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KamarInap model.
     * @param string $no_rawat No Rawat
     * @param string $tgl_masuk Tgl Masuk
     * @param string $jam_masuk Jam Masuk
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tgl_masuk, $jam_masuk)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tgl_masuk, $jam_masuk),
        ]);
    }

    /**
     * Creates a new KamarInap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KamarInap();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KamarInap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_masuk Tgl Masuk
     * @param string $jam_masuk Jam Masuk
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tgl_masuk, $jam_masuk)
    {
        $model = $this->findModel($no_rawat, $tgl_masuk, $jam_masuk);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KamarInap model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_masuk Tgl Masuk
     * @param string $jam_masuk Jam Masuk
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tgl_masuk, $jam_masuk)
    {
        $this->findModel($no_rawat, $tgl_masuk, $jam_masuk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KamarInap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tgl_masuk Tgl Masuk
     * @param string $jam_masuk Jam Masuk
     * @return KamarInap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tgl_masuk, $jam_masuk)
    {
        if (($model = KamarInap::findOne(['no_rawat' => $no_rawat, 'tgl_masuk' => $tgl_masuk, 'jam_masuk' => $jam_masuk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
