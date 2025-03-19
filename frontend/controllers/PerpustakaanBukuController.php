<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanBuku;
use frontend\models\PerpustakaanBukuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanBukuController implements the CRUD actions for PerpustakaanBuku model.
 */
class PerpustakaanBukuController extends Controller
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
     * Lists all PerpustakaanBuku models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanBukuSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanBuku model.
     * @param string $kode_buku Kode Buku
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_buku)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_buku),
        ]);
    }

    /**
     * Creates a new PerpustakaanBuku model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanBuku();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_buku' => $model->kode_buku]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanBuku model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_buku Kode Buku
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_buku)
    {
        $model = $this->findModel($kode_buku);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_buku' => $model->kode_buku]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanBuku model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_buku Kode Buku
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_buku)
    {
        $this->findModel($kode_buku)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanBuku model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_buku Kode Buku
     * @return PerpustakaanBuku the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_buku)
    {
        if (($model = PerpustakaanBuku::findOne(['kode_buku' => $kode_buku])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
