<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanPenerbit;
use frontend\models\PerpustakaanPenerbitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanPenerbitController implements the CRUD actions for PerpustakaanPenerbit model.
 */
class PerpustakaanPenerbitController extends Controller
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
     * Lists all PerpustakaanPenerbit models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanPenerbitSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanPenerbit model.
     * @param string $kode_penerbit Kode Penerbit
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_penerbit)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_penerbit),
        ]);
    }

    /**
     * Creates a new PerpustakaanPenerbit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanPenerbit();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_penerbit' => $model->kode_penerbit]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanPenerbit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_penerbit Kode Penerbit
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_penerbit)
    {
        $model = $this->findModel($kode_penerbit);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_penerbit' => $model->kode_penerbit]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanPenerbit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_penerbit Kode Penerbit
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_penerbit)
    {
        $this->findModel($kode_penerbit)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanPenerbit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_penerbit Kode Penerbit
     * @return PerpustakaanPenerbit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_penerbit)
    {
        if (($model = PerpustakaanPenerbit::findOne(['kode_penerbit' => $kode_penerbit])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
