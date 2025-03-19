<?php

namespace frontend\controllers;

use frontend\models\MapingDokterPcare;
use frontend\models\MapingDokterPcareSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MapingDokterPcareController implements the CRUD actions for MapingDokterPcare model.
 */
class MapingDokterPcareController extends Controller
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
     * Lists all MapingDokterPcare models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MapingDokterPcareSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MapingDokterPcare model.
     * @param string $kd_dokter Kd Dokter
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_dokter)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_dokter),
        ]);
    }

    /**
     * Creates a new MapingDokterPcare model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MapingDokterPcare();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_dokter' => $model->kd_dokter]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MapingDokterPcare model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_dokter Kd Dokter
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_dokter)
    {
        $model = $this->findModel($kd_dokter);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_dokter' => $model->kd_dokter]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MapingDokterPcare model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_dokter Kd Dokter
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_dokter)
    {
        $this->findModel($kd_dokter)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MapingDokterPcare model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_dokter Kd Dokter
     * @return MapingDokterPcare the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_dokter)
    {
        if (($model = MapingDokterPcare::findOne(['kd_dokter' => $kd_dokter])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
