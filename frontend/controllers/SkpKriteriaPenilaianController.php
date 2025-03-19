<?php

namespace frontend\controllers;

use frontend\models\SkpKriteriaPenilaian;
use frontend\models\SkpKriteriaPenilaianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkpKriteriaPenilaianController implements the CRUD actions for SkpKriteriaPenilaian model.
 */
class SkpKriteriaPenilaianController extends Controller
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
     * Lists all SkpKriteriaPenilaian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SkpKriteriaPenilaianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkpKriteriaPenilaian model.
     * @param string $kode_kriteria Kode Kriteria
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_kriteria)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_kriteria),
        ]);
    }

    /**
     * Creates a new SkpKriteriaPenilaian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SkpKriteriaPenilaian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_kriteria' => $model->kode_kriteria]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SkpKriteriaPenilaian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_kriteria Kode Kriteria
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_kriteria)
    {
        $model = $this->findModel($kode_kriteria);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_kriteria' => $model->kode_kriteria]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SkpKriteriaPenilaian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_kriteria Kode Kriteria
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_kriteria)
    {
        $this->findModel($kode_kriteria)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SkpKriteriaPenilaian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_kriteria Kode Kriteria
     * @return SkpKriteriaPenilaian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_kriteria)
    {
        if (($model = SkpKriteriaPenilaian::findOne(['kode_kriteria' => $kode_kriteria])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
