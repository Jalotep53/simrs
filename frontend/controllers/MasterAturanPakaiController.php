<?php

namespace frontend\controllers;

use frontend\models\MasterAturanPakai;
use frontend\models\MasterAturanPakaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterAturanPakaiController implements the CRUD actions for MasterAturanPakai model.
 */
class MasterAturanPakaiController extends Controller
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
     * Lists all MasterAturanPakai models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterAturanPakaiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterAturanPakai model.
     * @param string $aturan Aturan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($aturan)
    {
        return $this->render('view', [
            'model' => $this->findModel($aturan),
        ]);
    }

    /**
     * Creates a new MasterAturanPakai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterAturanPakai();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'aturan' => $model->aturan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterAturanPakai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $aturan Aturan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($aturan)
    {
        $model = $this->findModel($aturan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'aturan' => $model->aturan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterAturanPakai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $aturan Aturan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($aturan)
    {
        $this->findModel($aturan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterAturanPakai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $aturan Aturan
     * @return MasterAturanPakai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($aturan)
    {
        if (($model = MasterAturanPakai::findOne(['aturan' => $aturan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
