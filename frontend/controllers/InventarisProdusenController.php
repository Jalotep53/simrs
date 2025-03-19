<?php

namespace frontend\controllers;

use frontend\models\InventarisProdusen;
use frontend\models\InventarisProdusenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InventarisProdusenController implements the CRUD actions for InventarisProdusen model.
 */
class InventarisProdusenController extends Controller
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
     * Lists all InventarisProdusen models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InventarisProdusenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InventarisProdusen model.
     * @param string $kode_produsen Kode Produsen
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_produsen)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_produsen),
        ]);
    }

    /**
     * Creates a new InventarisProdusen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InventarisProdusen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_produsen' => $model->kode_produsen]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InventarisProdusen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_produsen Kode Produsen
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_produsen)
    {
        $model = $this->findModel($kode_produsen);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_produsen' => $model->kode_produsen]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InventarisProdusen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_produsen Kode Produsen
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_produsen)
    {
        $this->findModel($kode_produsen)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InventarisProdusen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_produsen Kode Produsen
     * @return InventarisProdusen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_produsen)
    {
        if (($model = InventarisProdusen::findOne(['kode_produsen' => $kode_produsen])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
