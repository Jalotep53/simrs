<?php

namespace frontend\controllers;

use frontend\models\Kodesatuan;
use frontend\models\KodesatuanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KodesatuanController implements the CRUD actions for Kodesatuan model.
 */
class KodesatuanController extends Controller
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
     * Lists all Kodesatuan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KodesatuanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kodesatuan model.
     * @param string $kode_sat Kode Sat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_sat)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_sat),
        ]);
    }

    /**
     * Creates a new Kodesatuan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kodesatuan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_sat' => $model->kode_sat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kodesatuan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_sat Kode Sat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_sat)
    {
        $model = $this->findModel($kode_sat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_sat' => $model->kode_sat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kodesatuan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_sat Kode Sat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_sat)
    {
        $this->findModel($kode_sat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kodesatuan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_sat Kode Sat
     * @return Kodesatuan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_sat)
    {
        if (($model = Kodesatuan::findOne(['kode_sat' => $kode_sat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
