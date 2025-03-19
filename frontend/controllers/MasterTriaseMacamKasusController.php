<?php

namespace frontend\controllers;

use frontend\models\MasterTriaseMacamKasus;
use frontend\models\MasterTriaseMacamKasusSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterTriaseMacamKasusController implements the CRUD actions for MasterTriaseMacamKasus model.
 */
class MasterTriaseMacamKasusController extends Controller
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
     * Lists all MasterTriaseMacamKasus models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterTriaseMacamKasusSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterTriaseMacamKasus model.
     * @param string $kode_kasus Kode Kasus
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_kasus)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_kasus),
        ]);
    }

    /**
     * Creates a new MasterTriaseMacamKasus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterTriaseMacamKasus();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_kasus' => $model->kode_kasus]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterTriaseMacamKasus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_kasus Kode Kasus
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_kasus)
    {
        $model = $this->findModel($kode_kasus);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_kasus' => $model->kode_kasus]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterTriaseMacamKasus model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_kasus Kode Kasus
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_kasus)
    {
        $this->findModel($kode_kasus)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterTriaseMacamKasus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_kasus Kode Kasus
     * @return MasterTriaseMacamKasus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_kasus)
    {
        if (($model = MasterTriaseMacamKasus::findOne(['kode_kasus' => $kode_kasus])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
