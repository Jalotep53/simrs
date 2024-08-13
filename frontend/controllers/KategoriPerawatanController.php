<?php

namespace frontend\controllers;

use frontend\models\KategoriPerawatan;
use frontend\models\KategoriPerawatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KategoriPerawatanController implements the CRUD actions for KategoriPerawatan model.
 */
class KategoriPerawatanController extends Controller
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
     * Lists all KategoriPerawatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KategoriPerawatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KategoriPerawatan model.
     * @param string $kd_kategori Kd Kategori
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_kategori)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_kategori),
        ]);
    }

    /**
     * Creates a new KategoriPerawatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KategoriPerawatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_kategori' => $model->kd_kategori]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KategoriPerawatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_kategori Kd Kategori
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_kategori)
    {
        $model = $this->findModel($kd_kategori);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_kategori' => $model->kd_kategori]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KategoriPerawatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_kategori Kd Kategori
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_kategori)
    {
        $this->findModel($kd_kategori)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KategoriPerawatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_kategori Kd Kategori
     * @return KategoriPerawatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_kategori)
    {
        if (($model = KategoriPerawatan::findOne(['kd_kategori' => $kd_kategori])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
