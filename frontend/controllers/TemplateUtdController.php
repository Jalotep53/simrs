<?php

namespace frontend\controllers;

use frontend\models\TemplateUtd;
use frontend\models\TemplateUtdSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TemplateUtdController implements the CRUD actions for TemplateUtd model.
 */
class TemplateUtdController extends Controller
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
     * Lists all TemplateUtd models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TemplateUtdSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TemplateUtd model.
     * @param int $id_template Id Template
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_template)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_template),
        ]);
    }

    /**
     * Creates a new TemplateUtd model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TemplateUtd();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_template' => $model->id_template]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TemplateUtd model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_template Id Template
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_template)
    {
        $model = $this->findModel($id_template);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_template' => $model->id_template]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TemplateUtd model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_template Id Template
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_template)
    {
        $this->findModel($id_template)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TemplateUtd model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_template Id Template
     * @return TemplateUtd the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_template)
    {
        if (($model = TemplateUtd::findOne(['id_template' => $id_template])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
