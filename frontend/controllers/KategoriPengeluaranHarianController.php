<?php

namespace frontend\controllers;

use frontend\models\KategoriPengeluaranHarian;
use frontend\models\KategoriPengeluaranHarianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KategoriPengeluaranHarianController implements the CRUD actions for KategoriPengeluaranHarian model.
 */
class KategoriPengeluaranHarianController extends Controller
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
     * Lists all KategoriPengeluaranHarian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KategoriPengeluaranHarianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KategoriPengeluaranHarian model.
     * @param string $kode_kategori Kode Kategori
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_kategori)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_kategori),
        ]);
    }

    /**
     * Creates a new KategoriPengeluaranHarian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KategoriPengeluaranHarian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_kategori' => $model->kode_kategori]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KategoriPengeluaranHarian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_kategori Kode Kategori
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_kategori)
    {
        $model = $this->findModel($kode_kategori);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_kategori' => $model->kode_kategori]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KategoriPengeluaranHarian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_kategori Kode Kategori
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_kategori)
    {
        $this->findModel($kode_kategori)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KategoriPengeluaranHarian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_kategori Kode Kategori
     * @return KategoriPengeluaranHarian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_kategori)
    {
        if (($model = KategoriPengeluaranHarian::findOne(['kode_kategori' => $kode_kategori])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
