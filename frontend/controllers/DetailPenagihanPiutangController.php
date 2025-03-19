<?php

namespace frontend\controllers;

use frontend\models\DetailPenagihanPiutang;
use frontend\models\DetailPenagihanPiutangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailPenagihanPiutangController implements the CRUD actions for DetailPenagihanPiutang model.
 */
class DetailPenagihanPiutangController extends Controller
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
     * Lists all DetailPenagihanPiutang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DetailPenagihanPiutangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailPenagihanPiutang model.
     * @param string $no_tagihan No Tagihan
     * @param string $no_rawat No Rawat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_tagihan, $no_rawat)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_tagihan, $no_rawat),
        ]);
    }

    /**
     * Creates a new DetailPenagihanPiutang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DetailPenagihanPiutang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_tagihan' => $model->no_tagihan, 'no_rawat' => $model->no_rawat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailPenagihanPiutang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_tagihan No Tagihan
     * @param string $no_rawat No Rawat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_tagihan, $no_rawat)
    {
        $model = $this->findModel($no_tagihan, $no_rawat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_tagihan' => $model->no_tagihan, 'no_rawat' => $model->no_rawat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailPenagihanPiutang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_tagihan No Tagihan
     * @param string $no_rawat No Rawat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_tagihan, $no_rawat)
    {
        $this->findModel($no_tagihan, $no_rawat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailPenagihanPiutang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_tagihan No Tagihan
     * @param string $no_rawat No Rawat
     * @return DetailPenagihanPiutang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_tagihan, $no_rawat)
    {
        if (($model = DetailPenagihanPiutang::findOne(['no_tagihan' => $no_tagihan, 'no_rawat' => $no_rawat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
