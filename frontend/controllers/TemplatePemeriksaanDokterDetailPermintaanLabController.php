<?php

namespace frontend\controllers;

use frontend\models\TemplatePemeriksaanDokterDetailPermintaanLab;
use frontend\models\TemplatePemeriksaanDokterDetailPermintaanLabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TemplatePemeriksaanDokterDetailPermintaanLabController implements the CRUD actions for TemplatePemeriksaanDokterDetailPermintaanLab model.
 */
class TemplatePemeriksaanDokterDetailPermintaanLabController extends Controller
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
     * Lists all TemplatePemeriksaanDokterDetailPermintaanLab models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TemplatePemeriksaanDokterDetailPermintaanLabSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TemplatePemeriksaanDokterDetailPermintaanLab model.
     * @param string $no_template No Template
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param int $id_template Id Template
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_template, $kd_jenis_prw, $id_template)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_template, $kd_jenis_prw, $id_template),
        ]);
    }

    /**
     * Creates a new TemplatePemeriksaanDokterDetailPermintaanLab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TemplatePemeriksaanDokterDetailPermintaanLab();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TemplatePemeriksaanDokterDetailPermintaanLab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_template No Template
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param int $id_template Id Template
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_template, $kd_jenis_prw, $id_template)
    {
        $model = $this->findModel($no_template, $kd_jenis_prw, $id_template);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TemplatePemeriksaanDokterDetailPermintaanLab model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_template No Template
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param int $id_template Id Template
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_template, $kd_jenis_prw, $id_template)
    {
        $this->findModel($no_template, $kd_jenis_prw, $id_template)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TemplatePemeriksaanDokterDetailPermintaanLab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_template No Template
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param int $id_template Id Template
     * @return TemplatePemeriksaanDokterDetailPermintaanLab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_template, $kd_jenis_prw, $id_template)
    {
        if (($model = TemplatePemeriksaanDokterDetailPermintaanLab::findOne(['no_template' => $no_template, 'kd_jenis_prw' => $kd_jenis_prw, 'id_template' => $id_template])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
