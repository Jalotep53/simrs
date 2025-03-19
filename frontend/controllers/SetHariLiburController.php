<?php

namespace frontend\controllers;

use frontend\models\SetHariLibur;
use frontend\models\SetHariLiburSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetHariLiburController implements the CRUD actions for SetHariLibur model.
 */
class SetHariLiburController extends Controller
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
     * Lists all SetHariLibur models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetHariLiburSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetHariLibur model.
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal),
        ]);
    }

    /**
     * Creates a new SetHariLibur model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetHariLibur();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetHariLibur model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal)
    {
        $model = $this->findModel($tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetHariLibur model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal)
    {
        $this->findModel($tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetHariLibur model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @return SetHariLibur the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal)
    {
        if (($model = SetHariLibur::findOne(['tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
