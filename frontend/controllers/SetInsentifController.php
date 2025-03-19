<?php

namespace frontend\controllers;

use frontend\models\SetInsentif;
use frontend\models\SetInsentifSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetInsentifController implements the CRUD actions for SetInsentif model.
 */
class SetInsentifController extends Controller
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
     * Lists all SetInsentif models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetInsentifSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetInsentif model.
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
     * Creates a new SetInsentif model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetInsentif();

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
     * Updates an existing SetInsentif model.
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
     * Deletes an existing SetInsentif model.
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
     * Finds the SetInsentif model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tahun Tahun
     * @param int $bulan Bulan
     * @return SetInsentif the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tahun, $bulan)
    {
        if (($model = SetInsentif::findOne(['tahun' => $tahun, 'bulan' => $bulan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
