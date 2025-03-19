<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanBayarDendaHarian;
use frontend\models\PerpustakaanBayarDendaHarianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanBayarDendaHarianController implements the CRUD actions for PerpustakaanBayarDendaHarian model.
 */
class PerpustakaanBayarDendaHarianController extends Controller
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
     * Lists all PerpustakaanBayarDendaHarian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanBayarDendaHarianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanBayarDendaHarian model.
     * @param string $tgl_denda Tgl Denda
     * @param string $no_anggota No Anggota
     * @param string $no_inventaris No Inventaris
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl_denda, $no_anggota, $no_inventaris)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl_denda, $no_anggota, $no_inventaris),
        ]);
    }

    /**
     * Creates a new PerpustakaanBayarDendaHarian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanBayarDendaHarian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl_denda' => $model->tgl_denda, 'no_anggota' => $model->no_anggota, 'no_inventaris' => $model->no_inventaris]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanBayarDendaHarian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl_denda Tgl Denda
     * @param string $no_anggota No Anggota
     * @param string $no_inventaris No Inventaris
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl_denda, $no_anggota, $no_inventaris)
    {
        $model = $this->findModel($tgl_denda, $no_anggota, $no_inventaris);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl_denda' => $model->tgl_denda, 'no_anggota' => $model->no_anggota, 'no_inventaris' => $model->no_inventaris]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanBayarDendaHarian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl_denda Tgl Denda
     * @param string $no_anggota No Anggota
     * @param string $no_inventaris No Inventaris
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl_denda, $no_anggota, $no_inventaris)
    {
        $this->findModel($tgl_denda, $no_anggota, $no_inventaris)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanBayarDendaHarian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl_denda Tgl Denda
     * @param string $no_anggota No Anggota
     * @param string $no_inventaris No Inventaris
     * @return PerpustakaanBayarDendaHarian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl_denda, $no_anggota, $no_inventaris)
    {
        if (($model = PerpustakaanBayarDendaHarian::findOne(['tgl_denda' => $tgl_denda, 'no_anggota' => $no_anggota, 'no_inventaris' => $no_inventaris])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
