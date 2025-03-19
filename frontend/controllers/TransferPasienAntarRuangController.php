<?php

namespace frontend\controllers;

use frontend\models\TransferPasienAntarRuang;
use frontend\models\TransferPasienAntarRuangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransferPasienAntarRuangController implements the CRUD actions for TransferPasienAntarRuang model.
 */
class TransferPasienAntarRuangController extends Controller
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
     * Lists all TransferPasienAntarRuang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TransferPasienAntarRuangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TransferPasienAntarRuang model.
     * @param string $no_rawat No Rawat
     * @param string $tanggal_masuk Tanggal Masuk
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tanggal_masuk)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tanggal_masuk),
        ]);
    }

    /**
     * Creates a new TransferPasienAntarRuang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TransferPasienAntarRuang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tanggal_masuk' => $model->tanggal_masuk]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TransferPasienAntarRuang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tanggal_masuk Tanggal Masuk
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tanggal_masuk)
    {
        $model = $this->findModel($no_rawat, $tanggal_masuk);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tanggal_masuk' => $model->tanggal_masuk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TransferPasienAntarRuang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tanggal_masuk Tanggal Masuk
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tanggal_masuk)
    {
        $this->findModel($no_rawat, $tanggal_masuk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TransferPasienAntarRuang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tanggal_masuk Tanggal Masuk
     * @return TransferPasienAntarRuang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tanggal_masuk)
    {
        if (($model = TransferPasienAntarRuang::findOne(['no_rawat' => $no_rawat, 'tanggal_masuk' => $tanggal_masuk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
