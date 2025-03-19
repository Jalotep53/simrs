<?php

namespace frontend\controllers;

use frontend\models\AngsuranKoperasi;
use frontend\models\AngsuranKoperasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AngsuranKoperasiController implements the CRUD actions for AngsuranKoperasi model.
 */
class AngsuranKoperasiController extends Controller
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
     * Lists all AngsuranKoperasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AngsuranKoperasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AngsuranKoperasi model.
     * @param int $id ID
     * @param string $tanggal_pinjam Tanggal Pinjam
     * @param string $tanggal_angsur Tanggal Angsur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $tanggal_pinjam, $tanggal_angsur)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $tanggal_pinjam, $tanggal_angsur),
        ]);
    }

    /**
     * Creates a new AngsuranKoperasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AngsuranKoperasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'tanggal_pinjam' => $model->tanggal_pinjam, 'tanggal_angsur' => $model->tanggal_angsur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AngsuranKoperasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $tanggal_pinjam Tanggal Pinjam
     * @param string $tanggal_angsur Tanggal Angsur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $tanggal_pinjam, $tanggal_angsur)
    {
        $model = $this->findModel($id, $tanggal_pinjam, $tanggal_angsur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'tanggal_pinjam' => $model->tanggal_pinjam, 'tanggal_angsur' => $model->tanggal_angsur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AngsuranKoperasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $tanggal_pinjam Tanggal Pinjam
     * @param string $tanggal_angsur Tanggal Angsur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $tanggal_pinjam, $tanggal_angsur)
    {
        $this->findModel($id, $tanggal_pinjam, $tanggal_angsur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AngsuranKoperasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $tanggal_pinjam Tanggal Pinjam
     * @param string $tanggal_angsur Tanggal Angsur
     * @return AngsuranKoperasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $tanggal_pinjam, $tanggal_angsur)
    {
        if (($model = AngsuranKoperasi::findOne(['id' => $id, 'tanggal_pinjam' => $tanggal_pinjam, 'tanggal_angsur' => $tanggal_angsur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
