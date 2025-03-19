<?php

namespace frontend\controllers;

use frontend\models\SkpPenilaian;
use frontend\models\SkpPenilaianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkpPenilaianController implements the CRUD actions for SkpPenilaian model.
 */
class SkpPenilaianController extends Controller
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
     * Lists all SkpPenilaian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SkpPenilaianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkpPenilaian model.
     * @param string $nomor_penilaian Nomor Penilaian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nomor_penilaian)
    {
        return $this->render('view', [
            'model' => $this->findModel($nomor_penilaian),
        ]);
    }

    /**
     * Creates a new SkpPenilaian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SkpPenilaian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nomor_penilaian' => $model->nomor_penilaian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SkpPenilaian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nomor_penilaian Nomor Penilaian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nomor_penilaian)
    {
        $model = $this->findModel($nomor_penilaian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nomor_penilaian' => $model->nomor_penilaian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SkpPenilaian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nomor_penilaian Nomor Penilaian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nomor_penilaian)
    {
        $this->findModel($nomor_penilaian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SkpPenilaian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nomor_penilaian Nomor Penilaian
     * @return SkpPenilaian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nomor_penilaian)
    {
        if (($model = SkpPenilaian::findOne(['nomor_penilaian' => $nomor_penilaian])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
