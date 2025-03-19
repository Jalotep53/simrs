<?php

namespace frontend\controllers;

use frontend\models\K3rsPenyebab;
use frontend\models\K3rsPenyebabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * K3rsPenyebabController implements the CRUD actions for K3rsPenyebab model.
 */
class K3rsPenyebabController extends Controller
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
     * Lists all K3rsPenyebab models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new K3rsPenyebabSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single K3rsPenyebab model.
     * @param string $kode_penyebab Kode Penyebab
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_penyebab)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_penyebab),
        ]);
    }

    /**
     * Creates a new K3rsPenyebab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new K3rsPenyebab();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_penyebab' => $model->kode_penyebab]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing K3rsPenyebab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_penyebab Kode Penyebab
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_penyebab)
    {
        $model = $this->findModel($kode_penyebab);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_penyebab' => $model->kode_penyebab]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing K3rsPenyebab model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_penyebab Kode Penyebab
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_penyebab)
    {
        $this->findModel($kode_penyebab)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the K3rsPenyebab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_penyebab Kode Penyebab
     * @return K3rsPenyebab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_penyebab)
    {
        if (($model = K3rsPenyebab::findOne(['kode_penyebab' => $kode_penyebab])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
