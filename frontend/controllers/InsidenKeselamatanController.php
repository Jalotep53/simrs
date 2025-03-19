<?php

namespace frontend\controllers;

use frontend\models\InsidenKeselamatan;
use frontend\models\InsidenKeselamatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InsidenKeselamatanController implements the CRUD actions for InsidenKeselamatan model.
 */
class InsidenKeselamatanController extends Controller
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
     * Lists all InsidenKeselamatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InsidenKeselamatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InsidenKeselamatan model.
     * @param string $kode_insiden Kode Insiden
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_insiden)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_insiden),
        ]);
    }

    /**
     * Creates a new InsidenKeselamatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InsidenKeselamatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_insiden' => $model->kode_insiden]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InsidenKeselamatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_insiden Kode Insiden
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_insiden)
    {
        $model = $this->findModel($kode_insiden);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_insiden' => $model->kode_insiden]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InsidenKeselamatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_insiden Kode Insiden
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_insiden)
    {
        $this->findModel($kode_insiden)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InsidenKeselamatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_insiden Kode Insiden
     * @return InsidenKeselamatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_insiden)
    {
        if (($model = InsidenKeselamatan::findOne(['kode_insiden' => $kode_insiden])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
