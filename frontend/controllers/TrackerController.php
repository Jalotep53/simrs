<?php

namespace frontend\controllers;

use frontend\models\Tracker;
use frontend\models\TrackerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TrackerController implements the CRUD actions for Tracker model.
 */
class TrackerController extends Controller
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
     * Lists all Tracker models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TrackerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tracker model.
     * @param string $nip Nip
     * @param string $tgl_login Tgl Login
     * @param string $jam_login Jam Login
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nip, $tgl_login, $jam_login)
    {
        return $this->render('view', [
            'model' => $this->findModel($nip, $tgl_login, $jam_login),
        ]);
    }

    /**
     * Creates a new Tracker model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tracker();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nip' => $model->nip, 'tgl_login' => $model->tgl_login, 'jam_login' => $model->jam_login]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tracker model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nip Nip
     * @param string $tgl_login Tgl Login
     * @param string $jam_login Jam Login
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nip, $tgl_login, $jam_login)
    {
        $model = $this->findModel($nip, $tgl_login, $jam_login);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nip' => $model->nip, 'tgl_login' => $model->tgl_login, 'jam_login' => $model->jam_login]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tracker model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nip Nip
     * @param string $tgl_login Tgl Login
     * @param string $jam_login Jam Login
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nip, $tgl_login, $jam_login)
    {
        $this->findModel($nip, $tgl_login, $jam_login)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tracker model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nip Nip
     * @param string $tgl_login Tgl Login
     * @param string $jam_login Jam Login
     * @return Tracker the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nip, $tgl_login, $jam_login)
    {
        if (($model = Tracker::findOne(['nip' => $nip, 'tgl_login' => $tgl_login, 'jam_login' => $jam_login])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
