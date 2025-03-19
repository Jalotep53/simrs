<?php

namespace frontend\controllers;

use frontend\models\SuratKeluarDisposisi;
use frontend\models\SuratKeluarDisposisiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratKeluarDisposisiController implements the CRUD actions for SuratKeluarDisposisi model.
 */
class SuratKeluarDisposisiController extends Controller
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
     * Lists all SuratKeluarDisposisi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratKeluarDisposisiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratKeluarDisposisi model.
     * @param string $no_disposisi No Disposisi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_disposisi)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_disposisi),
        ]);
    }

    /**
     * Creates a new SuratKeluarDisposisi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratKeluarDisposisi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_disposisi' => $model->no_disposisi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SuratKeluarDisposisi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_disposisi No Disposisi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_disposisi)
    {
        $model = $this->findModel($no_disposisi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_disposisi' => $model->no_disposisi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratKeluarDisposisi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_disposisi No Disposisi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_disposisi)
    {
        $this->findModel($no_disposisi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratKeluarDisposisi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_disposisi No Disposisi
     * @return SuratKeluarDisposisi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_disposisi)
    {
        if (($model = SuratKeluarDisposisi::findOne(['no_disposisi' => $no_disposisi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
