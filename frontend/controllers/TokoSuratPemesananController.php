<?php

namespace frontend\controllers;

use frontend\models\TokoSuratPemesanan;
use frontend\models\TokoSuratPemesananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TokoSuratPemesananController implements the CRUD actions for TokoSuratPemesanan model.
 */
class TokoSuratPemesananController extends Controller
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
     * Lists all TokoSuratPemesanan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TokoSuratPemesananSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TokoSuratPemesanan model.
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
     * Creates a new TokoSuratPemesanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TokoSuratPemesanan();

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
     * Updates an existing TokoSuratPemesanan model.
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
     * Deletes an existing TokoSuratPemesanan model.
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
     * Finds the TokoSuratPemesanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_pemesanan No Pemesanan
     * @return TokoSuratPemesanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_pemesanan)
    {
        if (($model = TokoSuratPemesanan::findOne(['no_pemesanan' => $no_pemesanan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
