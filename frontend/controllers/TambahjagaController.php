<?php

namespace frontend\controllers;

use frontend\models\Tambahjaga;
use frontend\models\TambahjagaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TambahjagaController implements the CRUD actions for Tambahjaga model.
 */
class TambahjagaController extends Controller
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
     * Lists all Tambahjaga models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TambahjagaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tambahjaga model.
     * @param string $tgl Tgl
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl, $id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl, $id),
        ]);
    }

    /**
     * Creates a new Tambahjaga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tambahjaga();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl' => $model->tgl, 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tambahjaga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl Tgl
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl, $id)
    {
        $model = $this->findModel($tgl, $id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl' => $model->tgl, 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tambahjaga model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl Tgl
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl, $id)
    {
        $this->findModel($tgl, $id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tambahjaga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl Tgl
     * @param int $id ID
     * @return Tambahjaga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl, $id)
    {
        if (($model = Tambahjaga::findOne(['tgl' => $tgl, 'id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
