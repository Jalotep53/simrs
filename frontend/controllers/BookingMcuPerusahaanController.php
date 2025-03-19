<?php

namespace frontend\controllers;

use frontend\models\BookingMcuPerusahaan;
use frontend\models\BookingMcuPerusahaanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookingMcuPerusahaanController implements the CRUD actions for BookingMcuPerusahaan model.
 */
class BookingMcuPerusahaanController extends Controller
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
     * Lists all BookingMcuPerusahaan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BookingMcuPerusahaanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BookingMcuPerusahaan model.
     * @param string $no_mcu No Mcu
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_mcu)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_mcu),
        ]);
    }

    /**
     * Creates a new BookingMcuPerusahaan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BookingMcuPerusahaan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_mcu' => $model->no_mcu]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BookingMcuPerusahaan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_mcu No Mcu
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_mcu)
    {
        $model = $this->findModel($no_mcu);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_mcu' => $model->no_mcu]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BookingMcuPerusahaan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_mcu No Mcu
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_mcu)
    {
        $this->findModel($no_mcu)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BookingMcuPerusahaan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_mcu No Mcu
     * @return BookingMcuPerusahaan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_mcu)
    {
        if (($model = BookingMcuPerusahaan::findOne(['no_mcu' => $no_mcu])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
