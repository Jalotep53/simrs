<?php

namespace frontend\controllers;

use frontend\models\Bidang;
use frontend\models\BidangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BidangController implements the CRUD actions for Bidang model.
 */
class BidangController extends Controller
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
     * Lists all Bidang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BidangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bidang model.
     * @param string $nama Nama
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nama)
    {
        return $this->render('view', [
            'model' => $this->findModel($nama),
        ]);
    }

    /**
     * Creates a new Bidang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Bidang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nama' => $model->nama]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bidang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nama Nama
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nama)
    {
        $model = $this->findModel($nama);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nama' => $model->nama]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bidang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nama Nama
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nama)
    {
        $this->findModel($nama)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bidang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nama Nama
     * @return Bidang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nama)
    {
        if (($model = Bidang::findOne(['nama' => $nama])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
