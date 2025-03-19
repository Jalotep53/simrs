<?php

namespace frontend\controllers;

use frontend\models\PemeliharaanInventaris;
use frontend\models\PemeliharaanInventarisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PemeliharaanInventarisController implements the CRUD actions for PemeliharaanInventaris model.
 */
class PemeliharaanInventarisController extends Controller
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
     * Lists all PemeliharaanInventaris models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PemeliharaanInventarisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PemeliharaanInventaris model.
     * @param string $no_inventaris No Inventaris
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_inventaris, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_inventaris, $tanggal),
        ]);
    }

    /**
     * Creates a new PemeliharaanInventaris model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PemeliharaanInventaris();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_inventaris' => $model->no_inventaris, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PemeliharaanInventaris model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_inventaris No Inventaris
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_inventaris, $tanggal)
    {
        $model = $this->findModel($no_inventaris, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_inventaris' => $model->no_inventaris, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PemeliharaanInventaris model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_inventaris No Inventaris
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_inventaris, $tanggal)
    {
        $this->findModel($no_inventaris, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PemeliharaanInventaris model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_inventaris No Inventaris
     * @param string $tanggal Tanggal
     * @return PemeliharaanInventaris the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_inventaris, $tanggal)
    {
        if (($model = PemeliharaanInventaris::findOne(['no_inventaris' => $no_inventaris, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
