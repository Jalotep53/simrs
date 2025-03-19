<?php

namespace frontend\controllers;

use frontend\models\RanapGabung;
use frontend\models\RanapGabungSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RanapGabungController implements the CRUD actions for RanapGabung model.
 */
class RanapGabungController extends Controller
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
     * Lists all RanapGabung models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RanapGabungSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RanapGabung model.
     * @param string $no_rawat No Rawat
     * @param string $no_rawat2 No Rawat2
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $no_rawat2)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $no_rawat2),
        ]);
    }

    /**
     * Creates a new RanapGabung model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RanapGabung();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'no_rawat2' => $model->no_rawat2]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RanapGabung model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $no_rawat2 No Rawat2
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $no_rawat2)
    {
        $model = $this->findModel($no_rawat, $no_rawat2);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'no_rawat2' => $model->no_rawat2]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RanapGabung model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $no_rawat2 No Rawat2
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $no_rawat2)
    {
        $this->findModel($no_rawat, $no_rawat2)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RanapGabung model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $no_rawat2 No Rawat2
     * @return RanapGabung the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $no_rawat2)
    {
        if (($model = RanapGabung::findOne(['no_rawat' => $no_rawat, 'no_rawat2' => $no_rawat2])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
