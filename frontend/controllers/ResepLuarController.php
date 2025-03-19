<?php

namespace frontend\controllers;

use frontend\models\ResepLuar;
use frontend\models\ResepLuarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResepLuarController implements the CRUD actions for ResepLuar model.
 */
class ResepLuarController extends Controller
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
     * Lists all ResepLuar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ResepLuarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResepLuar model.
     * @param string $no_resep No Resep
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_resep)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_resep),
        ]);
    }

    /**
     * Creates a new ResepLuar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ResepLuar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_resep' => $model->no_resep]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ResepLuar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_resep No Resep
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_resep)
    {
        $model = $this->findModel($no_resep);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_resep' => $model->no_resep]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ResepLuar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_resep No Resep
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_resep)
    {
        $this->findModel($no_resep)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResepLuar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_resep No Resep
     * @return ResepLuar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_resep)
    {
        if (($model = ResepLuar::findOne(['no_resep' => $no_resep])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
