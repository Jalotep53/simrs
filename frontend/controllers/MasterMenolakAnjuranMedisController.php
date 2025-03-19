<?php

namespace frontend\controllers;

use frontend\models\MasterMenolakAnjuranMedis;
use frontend\models\MasterMenolakAnjuranMedisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterMenolakAnjuranMedisController implements the CRUD actions for MasterMenolakAnjuranMedis model.
 */
class MasterMenolakAnjuranMedisController extends Controller
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
     * Lists all MasterMenolakAnjuranMedis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterMenolakAnjuranMedisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterMenolakAnjuranMedis model.
     * @param string $kode_penolakan Kode Penolakan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_penolakan)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_penolakan),
        ]);
    }

    /**
     * Creates a new MasterMenolakAnjuranMedis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterMenolakAnjuranMedis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_penolakan' => $model->kode_penolakan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterMenolakAnjuranMedis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_penolakan Kode Penolakan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_penolakan)
    {
        $model = $this->findModel($kode_penolakan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_penolakan' => $model->kode_penolakan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterMenolakAnjuranMedis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_penolakan Kode Penolakan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_penolakan)
    {
        $this->findModel($kode_penolakan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterMenolakAnjuranMedis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_penolakan Kode Penolakan
     * @return MasterMenolakAnjuranMedis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_penolakan)
    {
        if (($model = MasterMenolakAnjuranMedis::findOne(['kode_penolakan' => $kode_penolakan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
