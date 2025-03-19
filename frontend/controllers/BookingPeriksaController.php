<?php

namespace frontend\controllers;

use frontend\models\BookingPeriksa;
use frontend\models\BookingPeriksaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookingPeriksaController implements the CRUD actions for BookingPeriksa model.
 */
class BookingPeriksaController extends Controller
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
     * Lists all BookingPeriksa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BookingPeriksaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BookingPeriksa model.
     * @param string $no_booking No Booking
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_booking)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_booking),
        ]);
    }

    /**
     * Creates a new BookingPeriksa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BookingPeriksa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_booking' => $model->no_booking]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BookingPeriksa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_booking No Booking
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_booking)
    {
        $model = $this->findModel($no_booking);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_booking' => $model->no_booking]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BookingPeriksa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_booking No Booking
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_booking)
    {
        $this->findModel($no_booking)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BookingPeriksa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_booking No Booking
     * @return BookingPeriksa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_booking)
    {
        if (($model = BookingPeriksa::findOne(['no_booking' => $no_booking])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
