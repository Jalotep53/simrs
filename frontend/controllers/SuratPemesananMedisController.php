<?php

namespace frontend\controllers;

use frontend\models\SuratPemesananMedis;
use frontend\models\SuratPemesananMedisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratPemesananMedisController implements the CRUD actions for SuratPemesananMedis model.
 */
class SuratPemesananMedisController extends Controller
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
     * Lists all SuratPemesananMedis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratPemesananMedisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratPemesananMedis model.
     * @param string $no_pemesanan No Pemesanan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_pemesanan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_pemesanan),
        ]);
    }

    /**
     * Creates a new SuratPemesananMedis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratPemesananMedis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_pemesanan' => $model->no_pemesanan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SuratPemesananMedis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_pemesanan No Pemesanan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_pemesanan)
    {
        $model = $this->findModel($no_pemesanan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_pemesanan' => $model->no_pemesanan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratPemesananMedis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_pemesanan No Pemesanan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_pemesanan)
    {
        $this->findModel($no_pemesanan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratPemesananMedis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_pemesanan No Pemesanan
     * @return SuratPemesananMedis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_pemesanan)
    {
        if (($model = SuratPemesananMedis::findOne(['no_pemesanan' => $no_pemesanan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
