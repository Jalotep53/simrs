<?php

namespace frontend\controllers;

use frontend\models\SetHargaObatRanap;
use frontend\models\SetHargaObatRanapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetHargaObatRanapController implements the CRUD actions for SetHargaObatRanap model.
 */
class SetHargaObatRanapController extends Controller
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
     * Lists all SetHargaObatRanap models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetHargaObatRanapSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetHargaObatRanap model.
     * @param string $kd_pj Kd Pj
     * @param string $kelas Kelas
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_pj, $kelas)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_pj, $kelas),
        ]);
    }

    /**
     * Creates a new SetHargaObatRanap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetHargaObatRanap();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_pj' => $model->kd_pj, 'kelas' => $model->kelas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetHargaObatRanap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_pj Kd Pj
     * @param string $kelas Kelas
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_pj, $kelas)
    {
        $model = $this->findModel($kd_pj, $kelas);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_pj' => $model->kd_pj, 'kelas' => $model->kelas]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetHargaObatRanap model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_pj Kd Pj
     * @param string $kelas Kelas
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_pj, $kelas)
    {
        $this->findModel($kd_pj, $kelas)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetHargaObatRanap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_pj Kd Pj
     * @param string $kelas Kelas
     * @return SetHargaObatRanap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_pj, $kelas)
    {
        if (($model = SetHargaObatRanap::findOne(['kd_pj' => $kd_pj, 'kelas' => $kelas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
