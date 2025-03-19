<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanPengarang;
use frontend\models\PerpustakaanPengarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanPengarangController implements the CRUD actions for PerpustakaanPengarang model.
 */
class PerpustakaanPengarangController extends Controller
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
     * Lists all PerpustakaanPengarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanPengarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanPengarang model.
     * @param string $kode_pengarang Kode Pengarang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_pengarang)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_pengarang),
        ]);
    }

    /**
     * Creates a new PerpustakaanPengarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanPengarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_pengarang' => $model->kode_pengarang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanPengarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_pengarang Kode Pengarang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_pengarang)
    {
        $model = $this->findModel($kode_pengarang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_pengarang' => $model->kode_pengarang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanPengarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_pengarang Kode Pengarang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_pengarang)
    {
        $this->findModel($kode_pengarang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanPengarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_pengarang Kode Pengarang
     * @return PerpustakaanPengarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_pengarang)
    {
        if (($model = PerpustakaanPengarang::findOne(['kode_pengarang' => $kode_pengarang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
