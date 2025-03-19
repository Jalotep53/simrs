<?php

namespace frontend\controllers;

use frontend\models\TokoBayarPiutang;
use frontend\models\TokoBayarPiutangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TokoBayarPiutangController implements the CRUD actions for TokoBayarPiutang model.
 */
class TokoBayarPiutangController extends Controller
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
     * Lists all TokoBayarPiutang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TokoBayarPiutangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TokoBayarPiutang model.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_member No Member
     * @param string $nota_piutang Nota Piutang
     * @param string $kd_rek Kd Rek
     * @param string $kd_rek_kontra Kd Rek Kontra
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl_bayar, $no_member, $nota_piutang, $kd_rek, $kd_rek_kontra)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl_bayar, $no_member, $nota_piutang, $kd_rek, $kd_rek_kontra),
        ]);
    }

    /**
     * Creates a new TokoBayarPiutang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TokoBayarPiutang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl_bayar' => $model->tgl_bayar, 'no_member' => $model->no_member, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TokoBayarPiutang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_member No Member
     * @param string $nota_piutang Nota Piutang
     * @param string $kd_rek Kd Rek
     * @param string $kd_rek_kontra Kd Rek Kontra
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl_bayar, $no_member, $nota_piutang, $kd_rek, $kd_rek_kontra)
    {
        $model = $this->findModel($tgl_bayar, $no_member, $nota_piutang, $kd_rek, $kd_rek_kontra);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl_bayar' => $model->tgl_bayar, 'no_member' => $model->no_member, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TokoBayarPiutang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_member No Member
     * @param string $nota_piutang Nota Piutang
     * @param string $kd_rek Kd Rek
     * @param string $kd_rek_kontra Kd Rek Kontra
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl_bayar, $no_member, $nota_piutang, $kd_rek, $kd_rek_kontra)
    {
        $this->findModel($tgl_bayar, $no_member, $nota_piutang, $kd_rek, $kd_rek_kontra)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TokoBayarPiutang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_member No Member
     * @param string $nota_piutang Nota Piutang
     * @param string $kd_rek Kd Rek
     * @param string $kd_rek_kontra Kd Rek Kontra
     * @return TokoBayarPiutang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl_bayar, $no_member, $nota_piutang, $kd_rek, $kd_rek_kontra)
    {
        if (($model = TokoBayarPiutang::findOne(['tgl_bayar' => $tgl_bayar, 'no_member' => $no_member, 'nota_piutang' => $nota_piutang, 'kd_rek' => $kd_rek, 'kd_rek_kontra' => $kd_rek_kontra])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
