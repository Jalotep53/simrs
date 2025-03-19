<?php

namespace frontend\controllers;

use frontend\models\PencapaianKinerjaPegawai;
use frontend\models\PencapaianKinerjaPegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PencapaianKinerjaPegawaiController implements the CRUD actions for PencapaianKinerjaPegawai model.
 */
class PencapaianKinerjaPegawaiController extends Controller
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
     * Lists all PencapaianKinerjaPegawai models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PencapaianKinerjaPegawaiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PencapaianKinerjaPegawai model.
     * @param int $id ID
     * @param string $kode_pencapaian Kode Pencapaian
     * @param string $tahun Tahun
     * @param int $bulan Bulan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $kode_pencapaian, $tahun, $bulan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $kode_pencapaian, $tahun, $bulan),
        ]);
    }

    /**
     * Creates a new PencapaianKinerjaPegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PencapaianKinerjaPegawai();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'kode_pencapaian' => $model->kode_pencapaian, 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PencapaianKinerjaPegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $kode_pencapaian Kode Pencapaian
     * @param string $tahun Tahun
     * @param int $bulan Bulan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $kode_pencapaian, $tahun, $bulan)
    {
        $model = $this->findModel($id, $kode_pencapaian, $tahun, $bulan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'kode_pencapaian' => $model->kode_pencapaian, 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PencapaianKinerjaPegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $kode_pencapaian Kode Pencapaian
     * @param string $tahun Tahun
     * @param int $bulan Bulan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $kode_pencapaian, $tahun, $bulan)
    {
        $this->findModel($id, $kode_pencapaian, $tahun, $bulan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PencapaianKinerjaPegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $kode_pencapaian Kode Pencapaian
     * @param string $tahun Tahun
     * @param int $bulan Bulan
     * @return PencapaianKinerjaPegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $kode_pencapaian, $tahun, $bulan)
    {
        if (($model = PencapaianKinerjaPegawai::findOne(['id' => $id, 'kode_pencapaian' => $kode_pencapaian, 'tahun' => $tahun, 'bulan' => $bulan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
