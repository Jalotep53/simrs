<?php

namespace frontend\controllers;

use frontend\models\TemplateHasilRadiologi;
use frontend\models\TemplateHasilRadiologiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TemplateHasilRadiologiController implements the CRUD actions for TemplateHasilRadiologi model.
 */
class TemplateHasilRadiologiController extends Controller
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
     * Lists all TemplateHasilRadiologi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TemplateHasilRadiologiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TemplateHasilRadiologi model.
     * @param string $no_template No Template
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_template)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_template),
        ]);
    }

    /**
     * Creates a new TemplateHasilRadiologi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TemplateHasilRadiologi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_template' => $model->no_template]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TemplateHasilRadiologi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_template No Template
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_template)
    {
        $model = $this->findModel($no_template);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_template' => $model->no_template]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TemplateHasilRadiologi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_template No Template
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_template)
    {
        $this->findModel($no_template)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TemplateHasilRadiologi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_template No Template
     * @return TemplateHasilRadiologi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_template)
    {
        if (($model = TemplateHasilRadiologi::findOne(['no_template' => $no_template])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
