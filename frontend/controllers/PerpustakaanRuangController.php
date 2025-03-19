<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanRuang;
use frontend\models\PerpustakaanRuangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanRuangController implements the CRUD actions for PerpustakaanRuang model.
 */
class PerpustakaanRuangController extends Controller
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
     * Lists all PerpustakaanRuang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanRuangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanRuang model.
     * @param string $kd_ruang Kd Ruang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_ruang)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_ruang),
        ]);
    }

    /**
     * Creates a new PerpustakaanRuang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanRuang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_ruang' => $model->kd_ruang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanRuang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_ruang Kd Ruang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_ruang)
    {
        $model = $this->findModel($kd_ruang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_ruang' => $model->kd_ruang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanRuang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_ruang Kd Ruang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_ruang)
    {
        $this->findModel($kd_ruang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanRuang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_ruang Kd Ruang
     * @return PerpustakaanRuang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_ruang)
    {
        if (($model = PerpustakaanRuang::findOne(['kd_ruang' => $kd_ruang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
