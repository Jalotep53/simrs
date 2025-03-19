<?php

namespace frontend\controllers;

use frontend\models\RiwayatPendidikan;
use frontend\models\RiwayatPendidikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RiwayatPendidikanController implements the CRUD actions for RiwayatPendidikan model.
 */
class RiwayatPendidikanController extends Controller
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
     * Lists all RiwayatPendidikan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RiwayatPendidikanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RiwayatPendidikan model.
     * @param int $id ID
     * @param string $pendidikan Pendidikan
     * @param string $sekolah Sekolah
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $pendidikan, $sekolah)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $pendidikan, $sekolah),
        ]);
    }

    /**
     * Creates a new RiwayatPendidikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RiwayatPendidikan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'pendidikan' => $model->pendidikan, 'sekolah' => $model->sekolah]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RiwayatPendidikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $pendidikan Pendidikan
     * @param string $sekolah Sekolah
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $pendidikan, $sekolah)
    {
        $model = $this->findModel($id, $pendidikan, $sekolah);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'pendidikan' => $model->pendidikan, 'sekolah' => $model->sekolah]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RiwayatPendidikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $pendidikan Pendidikan
     * @param string $sekolah Sekolah
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $pendidikan, $sekolah)
    {
        $this->findModel($id, $pendidikan, $sekolah)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RiwayatPendidikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $pendidikan Pendidikan
     * @param string $sekolah Sekolah
     * @return RiwayatPendidikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $pendidikan, $sekolah)
    {
        if (($model = RiwayatPendidikan::findOne(['id' => $id, 'pendidikan' => $pendidikan, 'sekolah' => $sekolah])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
