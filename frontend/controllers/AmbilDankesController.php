<?php

namespace frontend\controllers;

use frontend\models\AmbilDankes;
use frontend\models\AmbilDankesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AmbilDankesController implements the CRUD actions for AmbilDankes model.
 */
class AmbilDankesController extends Controller
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
     * Lists all AmbilDankes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AmbilDankesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AmbilDankes model.
     * @param int $id ID
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $tanggal),
        ]);
    }

    /**
     * Creates a new AmbilDankes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AmbilDankes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AmbilDankes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $tanggal)
    {
        $model = $this->findModel($id, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AmbilDankes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $tanggal)
    {
        $this->findModel($id, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AmbilDankes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $tanggal Tanggal
     * @return AmbilDankes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $tanggal)
    {
        if (($model = AmbilDankes::findOne(['id' => $id, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
