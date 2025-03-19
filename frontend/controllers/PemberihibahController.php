<?php

namespace frontend\controllers;

use frontend\models\Pemberihibah;
use frontend\models\PemberihibahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PemberihibahController implements the CRUD actions for Pemberihibah model.
 */
class PemberihibahController extends Controller
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
     * Lists all Pemberihibah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PemberihibahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pemberihibah model.
     * @param string $kode_pemberi Kode Pemberi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_pemberi)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_pemberi),
        ]);
    }

    /**
     * Creates a new Pemberihibah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pemberihibah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_pemberi' => $model->kode_pemberi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pemberihibah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_pemberi Kode Pemberi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_pemberi)
    {
        $model = $this->findModel($kode_pemberi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_pemberi' => $model->kode_pemberi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pemberihibah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_pemberi Kode Pemberi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_pemberi)
    {
        $this->findModel($kode_pemberi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pemberihibah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_pemberi Kode Pemberi
     * @return Pemberihibah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_pemberi)
    {
        if (($model = Pemberihibah::findOne(['kode_pemberi' => $kode_pemberi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
