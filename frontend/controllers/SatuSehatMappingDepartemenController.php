<?php

namespace frontend\controllers;

use frontend\models\SatuSehatMappingDepartemen;
use frontend\models\SatuSehatMappingDepartemenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatMappingDepartemenController implements the CRUD actions for SatuSehatMappingDepartemen model.
 */
class SatuSehatMappingDepartemenController extends Controller
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
     * Lists all SatuSehatMappingDepartemen models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatMappingDepartemenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatMappingDepartemen model.
     * @param string $dep_id Dep ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($dep_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($dep_id),
        ]);
    }

    /**
     * Creates a new SatuSehatMappingDepartemen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatMappingDepartemen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'dep_id' => $model->dep_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatMappingDepartemen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $dep_id Dep ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($dep_id)
    {
        $model = $this->findModel($dep_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'dep_id' => $model->dep_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatMappingDepartemen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $dep_id Dep ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($dep_id)
    {
        $this->findModel($dep_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatMappingDepartemen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $dep_id Dep ID
     * @return SatuSehatMappingDepartemen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($dep_id)
    {
        if (($model = SatuSehatMappingDepartemen::findOne(['dep_id' => $dep_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
