<?php

namespace frontend\controllers;

use frontend\models\Peminjampiutang;
use frontend\models\PeminjampiutangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PeminjampiutangController implements the CRUD actions for Peminjampiutang model.
 */
class PeminjampiutangController extends Controller
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
     * Lists all Peminjampiutang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PeminjampiutangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Peminjampiutang model.
     * @param string $kode_peminjam Kode Peminjam
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_peminjam)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_peminjam),
        ]);
    }

    /**
     * Creates a new Peminjampiutang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Peminjampiutang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_peminjam' => $model->kode_peminjam]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Peminjampiutang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_peminjam Kode Peminjam
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_peminjam)
    {
        $model = $this->findModel($kode_peminjam);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_peminjam' => $model->kode_peminjam]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Peminjampiutang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_peminjam Kode Peminjam
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_peminjam)
    {
        $this->findModel($kode_peminjam)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Peminjampiutang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_peminjam Kode Peminjam
     * @return Peminjampiutang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_peminjam)
    {
        if (($model = Peminjampiutang::findOne(['kode_peminjam' => $kode_peminjam])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
