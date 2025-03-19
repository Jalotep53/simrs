<?php

namespace frontend\controllers;

use frontend\models\PemeliharaanGedung;
use frontend\models\PemeliharaanGedungSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PemeliharaanGedungController implements the CRUD actions for PemeliharaanGedung model.
 */
class PemeliharaanGedungController extends Controller
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
     * Lists all PemeliharaanGedung models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PemeliharaanGedungSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PemeliharaanGedung model.
     * @param string $no_pemeliharaan No Pemeliharaan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_pemeliharaan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_pemeliharaan),
        ]);
    }

    /**
     * Creates a new PemeliharaanGedung model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PemeliharaanGedung();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_pemeliharaan' => $model->no_pemeliharaan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PemeliharaanGedung model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_pemeliharaan No Pemeliharaan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_pemeliharaan)
    {
        $model = $this->findModel($no_pemeliharaan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_pemeliharaan' => $model->no_pemeliharaan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PemeliharaanGedung model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_pemeliharaan No Pemeliharaan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_pemeliharaan)
    {
        $this->findModel($no_pemeliharaan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PemeliharaanGedung model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_pemeliharaan No Pemeliharaan
     * @return PemeliharaanGedung the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_pemeliharaan)
    {
        if (($model = PemeliharaanGedung::findOne(['no_pemeliharaan' => $no_pemeliharaan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
