<?php

namespace frontend\controllers;

use frontend\models\JadwalPegawai;
use frontend\models\JadwalPegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JadwalPegawaiController implements the CRUD actions for JadwalPegawai model.
 */
class JadwalPegawaiController extends Controller
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
     * Lists all JadwalPegawai models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JadwalPegawaiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JadwalPegawai model.
     * @param int $id ID
     * @param string $tahun Tahun
     * @param string $bulan Bulan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $tahun, $bulan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $tahun, $bulan),
        ]);
    }

    /**
     * Creates a new JadwalPegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new JadwalPegawai();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JadwalPegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $tahun Tahun
     * @param string $bulan Bulan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $tahun, $bulan)
    {
        $model = $this->findModel($id, $tahun, $bulan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JadwalPegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $tahun Tahun
     * @param string $bulan Bulan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $tahun, $bulan)
    {
        $this->findModel($id, $tahun, $bulan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JadwalPegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $tahun Tahun
     * @param string $bulan Bulan
     * @return JadwalPegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $tahun, $bulan)
    {
        if (($model = JadwalPegawai::findOne(['id' => $id, 'tahun' => $tahun, 'bulan' => $bulan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
