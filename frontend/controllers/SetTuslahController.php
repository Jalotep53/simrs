<?php

namespace frontend\controllers;

use frontend\models\SetTuslah;
use frontend\models\SetTuslahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetTuslahController implements the CRUD actions for SetTuslah model.
 */
class SetTuslahController extends Controller
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
     * Lists all SetTuslah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetTuslahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetTuslah model.
     * @param string $tahun Tahun
     * @param int $bulan Bulan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tahun, $bulan)
    {
        return $this->render('view', [
            'model' => $this->findModel($tahun, $bulan),
        ]);
    }

    /**
     * Creates a new SetTuslah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetTuslah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetTuslah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tahun Tahun
     * @param int $bulan Bulan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tahun, $bulan)
    {
        $model = $this->findModel($tahun, $bulan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetTuslah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tahun Tahun
     * @param int $bulan Bulan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tahun, $bulan)
    {
        $this->findModel($tahun, $bulan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetTuslah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tahun Tahun
     * @param int $bulan Bulan
     * @return SetTuslah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tahun, $bulan)
    {
        if (($model = SetTuslah::findOne(['tahun' => $tahun, 'bulan' => $bulan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
