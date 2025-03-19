<?php

namespace frontend\controllers;

use frontend\models\PencapaianKinerja;
use frontend\models\PencapaianKinerjaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PencapaianKinerjaController implements the CRUD actions for PencapaianKinerja model.
 */
class PencapaianKinerjaController extends Controller
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
     * Lists all PencapaianKinerja models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PencapaianKinerjaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PencapaianKinerja model.
     * @param string $kode_pencapaian Kode Pencapaian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_pencapaian)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_pencapaian),
        ]);
    }

    /**
     * Creates a new PencapaianKinerja model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PencapaianKinerja();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_pencapaian' => $model->kode_pencapaian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PencapaianKinerja model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_pencapaian Kode Pencapaian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_pencapaian)
    {
        $model = $this->findModel($kode_pencapaian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_pencapaian' => $model->kode_pencapaian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PencapaianKinerja model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_pencapaian Kode Pencapaian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_pencapaian)
    {
        $this->findModel($kode_pencapaian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PencapaianKinerja model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_pencapaian Kode Pencapaian
     * @return PencapaianKinerja the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_pencapaian)
    {
        if (($model = PencapaianKinerja::findOne(['kode_pencapaian' => $kode_pencapaian])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
