<?php

namespace frontend\controllers;

use frontend\models\PenjabDokumenKerjasama;
use frontend\models\PenjabDokumenKerjasamaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenjabDokumenKerjasamaController implements the CRUD actions for PenjabDokumenKerjasama model.
 */
class PenjabDokumenKerjasamaController extends Controller
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
     * Lists all PenjabDokumenKerjasama models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenjabDokumenKerjasamaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenjabDokumenKerjasama model.
     * @param string $kd_pj Kd Pj
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_pj)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_pj),
        ]);
    }

    /**
     * Creates a new PenjabDokumenKerjasama model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PenjabDokumenKerjasama();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_pj' => $model->kd_pj]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PenjabDokumenKerjasama model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_pj Kd Pj
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_pj)
    {
        $model = $this->findModel($kd_pj);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_pj' => $model->kd_pj]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PenjabDokumenKerjasama model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_pj Kd Pj
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_pj)
    {
        $this->findModel($kd_pj)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PenjabDokumenKerjasama model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_pj Kd Pj
     * @return PenjabDokumenKerjasama the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_pj)
    {
        if (($model = PenjabDokumenKerjasama::findOne(['kd_pj' => $kd_pj])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
