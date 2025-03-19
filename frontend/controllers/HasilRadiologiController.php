<?php

namespace frontend\controllers;

use frontend\models\HasilRadiologi;
use frontend\models\HasilRadiologiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HasilRadiologiController implements the CRUD actions for HasilRadiologi model.
 */
class HasilRadiologiController extends Controller
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
     * Lists all HasilRadiologi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HasilRadiologiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HasilRadiologi model.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tgl_periksa, $jam)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tgl_periksa, $jam),
        ]);
    }

    /**
     * Creates a new HasilRadiologi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new HasilRadiologi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing HasilRadiologi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tgl_periksa, $jam)
    {
        $model = $this->findModel($no_rawat, $tgl_periksa, $jam);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing HasilRadiologi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tgl_periksa, $jam)
    {
        $this->findModel($no_rawat, $tgl_periksa, $jam)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HasilRadiologi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return HasilRadiologi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tgl_periksa, $jam)
    {
        if (($model = HasilRadiologi::findOne(['no_rawat' => $no_rawat, 'tgl_periksa' => $tgl_periksa, 'jam' => $jam])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
