<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanBayarDenda;
use frontend\models\PerpustakaanBayarDendaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanBayarDendaController implements the CRUD actions for PerpustakaanBayarDenda model.
 */
class PerpustakaanBayarDendaController extends Controller
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
     * Lists all PerpustakaanBayarDenda models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanBayarDendaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanBayarDenda model.
     * @param string $tgl_denda Tgl Denda
     * @param string $no_anggota No Anggota
     * @param string $no_inventaris No Inventaris
     * @param string $kode_denda Kode Denda
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl_denda, $no_anggota, $no_inventaris, $kode_denda)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl_denda, $no_anggota, $no_inventaris, $kode_denda),
        ]);
    }

    /**
     * Creates a new PerpustakaanBayarDenda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanBayarDenda();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl_denda' => $model->tgl_denda, 'no_anggota' => $model->no_anggota, 'no_inventaris' => $model->no_inventaris, 'kode_denda' => $model->kode_denda]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanBayarDenda model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl_denda Tgl Denda
     * @param string $no_anggota No Anggota
     * @param string $no_inventaris No Inventaris
     * @param string $kode_denda Kode Denda
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl_denda, $no_anggota, $no_inventaris, $kode_denda)
    {
        $model = $this->findModel($tgl_denda, $no_anggota, $no_inventaris, $kode_denda);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl_denda' => $model->tgl_denda, 'no_anggota' => $model->no_anggota, 'no_inventaris' => $model->no_inventaris, 'kode_denda' => $model->kode_denda]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanBayarDenda model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl_denda Tgl Denda
     * @param string $no_anggota No Anggota
     * @param string $no_inventaris No Inventaris
     * @param string $kode_denda Kode Denda
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl_denda, $no_anggota, $no_inventaris, $kode_denda)
    {
        $this->findModel($tgl_denda, $no_anggota, $no_inventaris, $kode_denda)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanBayarDenda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl_denda Tgl Denda
     * @param string $no_anggota No Anggota
     * @param string $no_inventaris No Inventaris
     * @param string $kode_denda Kode Denda
     * @return PerpustakaanBayarDenda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl_denda, $no_anggota, $no_inventaris, $kode_denda)
    {
        if (($model = PerpustakaanBayarDenda::findOne(['tgl_denda' => $tgl_denda, 'no_anggota' => $no_anggota, 'no_inventaris' => $no_inventaris, 'kode_denda' => $kode_denda])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
