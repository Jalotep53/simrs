<?php

namespace frontend\controllers;

use frontend\models\KeslingMutuAirLimbah;
use frontend\models\KeslingMutuAirLimbahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KeslingMutuAirLimbahController implements the CRUD actions for KeslingMutuAirLimbah model.
 */
class KeslingMutuAirLimbahController extends Controller
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
     * Lists all KeslingMutuAirLimbah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KeslingMutuAirLimbahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KeslingMutuAirLimbah model.
     * @param string $nip Nip
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nip, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($nip, $tanggal),
        ]);
    }

    /**
     * Creates a new KeslingMutuAirLimbah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KeslingMutuAirLimbah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KeslingMutuAirLimbah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nip Nip
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nip, $tanggal)
    {
        $model = $this->findModel($nip, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KeslingMutuAirLimbah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nip Nip
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nip, $tanggal)
    {
        $this->findModel($nip, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KeslingMutuAirLimbah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nip Nip
     * @param string $tanggal Tanggal
     * @return KeslingMutuAirLimbah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nip, $tanggal)
    {
        if (($model = KeslingMutuAirLimbah::findOne(['nip' => $nip, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
