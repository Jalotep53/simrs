<?php

namespace frontend\controllers;

use frontend\models\Ipsrspengeluaran;
use frontend\models\IpsrspengeluaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IpsrspengeluaranController implements the CRUD actions for Ipsrspengeluaran model.
 */
class IpsrspengeluaranController extends Controller
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
     * Lists all Ipsrspengeluaran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IpsrspengeluaranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ipsrspengeluaran model.
     * @param string $no_keluar No Keluar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_keluar)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_keluar),
        ]);
    }

    /**
     * Creates a new Ipsrspengeluaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ipsrspengeluaran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_keluar' => $model->no_keluar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ipsrspengeluaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_keluar No Keluar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_keluar)
    {
        $model = $this->findModel($no_keluar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_keluar' => $model->no_keluar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ipsrspengeluaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_keluar No Keluar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_keluar)
    {
        $this->findModel($no_keluar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ipsrspengeluaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_keluar No Keluar
     * @return Ipsrspengeluaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_keluar)
    {
        if (($model = Ipsrspengeluaran::findOne(['no_keluar' => $no_keluar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
