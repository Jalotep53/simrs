<?php

namespace frontend\controllers;

use frontend\models\Subrekening;
use frontend\models\SubrekeningSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubrekeningController implements the CRUD actions for Subrekening model.
 */
class SubrekeningController extends Controller
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
     * Lists all Subrekening models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SubrekeningSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Subrekening model.
     * @param string $kd_rek2 Kd Rek2
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_rek2)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_rek2),
        ]);
    }

    /**
     * Creates a new Subrekening model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Subrekening();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_rek2' => $model->kd_rek2]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Subrekening model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_rek2 Kd Rek2
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_rek2)
    {
        $model = $this->findModel($kd_rek2);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_rek2' => $model->kd_rek2]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Subrekening model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_rek2 Kd Rek2
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_rek2)
    {
        $this->findModel($kd_rek2)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Subrekening model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_rek2 Kd Rek2
     * @return Subrekening the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_rek2)
    {
        if (($model = Subrekening::findOne(['kd_rek2' => $kd_rek2])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
