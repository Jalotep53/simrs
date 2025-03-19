<?php

namespace frontend\controllers;

use frontend\models\KategoriPenyakit;
use frontend\models\KategoriPenyakitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KategoriPenyakitController implements the CRUD actions for KategoriPenyakit model.
 */
class KategoriPenyakitController extends Controller
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
     * Lists all KategoriPenyakit models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KategoriPenyakitSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KategoriPenyakit model.
     * @param string $kd_ktg Kd Ktg
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_ktg)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_ktg),
        ]);
    }

    /**
     * Creates a new KategoriPenyakit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KategoriPenyakit();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_ktg' => $model->kd_ktg]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KategoriPenyakit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_ktg Kd Ktg
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_ktg)
    {
        $model = $this->findModel($kd_ktg);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_ktg' => $model->kd_ktg]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KategoriPenyakit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_ktg Kd Ktg
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_ktg)
    {
        $this->findModel($kd_ktg)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KategoriPenyakit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_ktg Kd Ktg
     * @return KategoriPenyakit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_ktg)
    {
        if (($model = KategoriPenyakit::findOne(['kd_ktg' => $kd_ktg])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
