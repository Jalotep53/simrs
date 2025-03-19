<?php

namespace frontend\controllers;

use frontend\models\SkpDetailPenilaian;
use frontend\models\SkpDetailPenilaianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkpDetailPenilaianController implements the CRUD actions for SkpDetailPenilaian model.
 */
class SkpDetailPenilaianController extends Controller
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
     * Lists all SkpDetailPenilaian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SkpDetailPenilaianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkpDetailPenilaian model.
     * @param string $nomor_penilaian Nomor Penilaian
     * @param string $kode_kriteria Kode Kriteria
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nomor_penilaian, $kode_kriteria)
    {
        return $this->render('view', [
            'model' => $this->findModel($nomor_penilaian, $kode_kriteria),
        ]);
    }

    /**
     * Creates a new SkpDetailPenilaian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SkpDetailPenilaian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nomor_penilaian' => $model->nomor_penilaian, 'kode_kriteria' => $model->kode_kriteria]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SkpDetailPenilaian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nomor_penilaian Nomor Penilaian
     * @param string $kode_kriteria Kode Kriteria
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nomor_penilaian, $kode_kriteria)
    {
        $model = $this->findModel($nomor_penilaian, $kode_kriteria);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nomor_penilaian' => $model->nomor_penilaian, 'kode_kriteria' => $model->kode_kriteria]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SkpDetailPenilaian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nomor_penilaian Nomor Penilaian
     * @param string $kode_kriteria Kode Kriteria
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nomor_penilaian, $kode_kriteria)
    {
        $this->findModel($nomor_penilaian, $kode_kriteria)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SkpDetailPenilaian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nomor_penilaian Nomor Penilaian
     * @param string $kode_kriteria Kode Kriteria
     * @return SkpDetailPenilaian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nomor_penilaian, $kode_kriteria)
    {
        if (($model = SkpDetailPenilaian::findOne(['nomor_penilaian' => $nomor_penilaian, 'kode_kriteria' => $kode_kriteria])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
