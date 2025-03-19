<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanDenda;
use frontend\models\PerpustakaanDendaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanDendaController implements the CRUD actions for PerpustakaanDenda model.
 */
class PerpustakaanDendaController extends Controller
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
     * Lists all PerpustakaanDenda models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanDendaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanDenda model.
     * @param string $kode_denda Kode Denda
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_denda)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_denda),
        ]);
    }

    /**
     * Creates a new PerpustakaanDenda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanDenda();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_denda' => $model->kode_denda]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanDenda model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_denda Kode Denda
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_denda)
    {
        $model = $this->findModel($kode_denda);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_denda' => $model->kode_denda]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanDenda model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_denda Kode Denda
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_denda)
    {
        $this->findModel($kode_denda)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanDenda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_denda Kode Denda
     * @return PerpustakaanDenda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_denda)
    {
        if (($model = PerpustakaanDenda::findOne(['kode_denda' => $kode_denda])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
