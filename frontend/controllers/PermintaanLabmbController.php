<?php

namespace frontend\controllers;

use frontend\models\PermintaanLabmb;
use frontend\models\PermintaanLabmbSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PermintaanLabmbController implements the CRUD actions for PermintaanLabmb model.
 */
class PermintaanLabmbController extends Controller
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
     * Lists all PermintaanLabmb models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PermintaanLabmbSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PermintaanLabmb model.
     * @param string $noorder Noorder
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($noorder)
    {
        return $this->render('view', [
            'model' => $this->findModel($noorder),
        ]);
    }

    /**
     * Creates a new PermintaanLabmb model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PermintaanLabmb();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'noorder' => $model->noorder]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PermintaanLabmb model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $noorder Noorder
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($noorder)
    {
        $model = $this->findModel($noorder);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'noorder' => $model->noorder]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PermintaanLabmb model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $noorder Noorder
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($noorder)
    {
        $this->findModel($noorder)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PermintaanLabmb model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $noorder Noorder
     * @return PermintaanLabmb the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($noorder)
    {
        if (($model = PermintaanLabmb::findOne(['noorder' => $noorder])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
