<?php

namespace frontend\controllers;

use frontend\models\UtdPenunjangRusak;
use frontend\models\UtdPenunjangRusakSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtdPenunjangRusakController implements the CRUD actions for UtdPenunjangRusak model.
 */
class UtdPenunjangRusakController extends Controller
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
     * Lists all UtdPenunjangRusak models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtdPenunjangRusakSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UtdPenunjangRusak model.
     * @param string $kode_brng Kode Brng
     * @param string $nip Nip
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_brng, $nip, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_brng, $nip, $tanggal),
        ]);
    }

    /**
     * Creates a new UtdPenunjangRusak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UtdPenunjangRusak();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UtdPenunjangRusak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_brng Kode Brng
     * @param string $nip Nip
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_brng, $nip, $tanggal)
    {
        $model = $this->findModel($kode_brng, $nip, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UtdPenunjangRusak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_brng Kode Brng
     * @param string $nip Nip
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_brng, $nip, $tanggal)
    {
        $this->findModel($kode_brng, $nip, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UtdPenunjangRusak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_brng Kode Brng
     * @param string $nip Nip
     * @param string $tanggal Tanggal
     * @return UtdPenunjangRusak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_brng, $nip, $tanggal)
    {
        if (($model = UtdPenunjangRusak::findOne(['kode_brng' => $kode_brng, 'nip' => $nip, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
