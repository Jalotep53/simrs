<?php

namespace frontend\controllers;

use frontend\models\InhealthTindakanOperasi;
use frontend\models\InhealthTindakanOperasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InhealthTindakanOperasiController implements the CRUD actions for InhealthTindakanOperasi model.
 */
class InhealthTindakanOperasiController extends Controller
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
     * Lists all InhealthTindakanOperasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InhealthTindakanOperasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InhealthTindakanOperasi model.
     * @param string $kode_paket Kode Paket
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_paket)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_paket),
        ]);
    }

    /**
     * Creates a new InhealthTindakanOperasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InhealthTindakanOperasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_paket' => $model->kode_paket]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InhealthTindakanOperasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_paket Kode Paket
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_paket)
    {
        $model = $this->findModel($kode_paket);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_paket' => $model->kode_paket]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InhealthTindakanOperasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_paket Kode Paket
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_paket)
    {
        $this->findModel($kode_paket)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InhealthTindakanOperasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_paket Kode Paket
     * @return InhealthTindakanOperasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_paket)
    {
        if (($model = InhealthTindakanOperasi::findOne(['kode_paket' => $kode_paket])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
