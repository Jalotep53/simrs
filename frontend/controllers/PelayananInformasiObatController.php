<?php

namespace frontend\controllers;

use frontend\models\PelayananInformasiObat;
use frontend\models\PelayananInformasiObatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PelayananInformasiObatController implements the CRUD actions for PelayananInformasiObat model.
 */
class PelayananInformasiObatController extends Controller
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
     * Lists all PelayananInformasiObat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PelayananInformasiObatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PelayananInformasiObat model.
     * @param string $no_permintaan No Permintaan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_permintaan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_permintaan),
        ]);
    }

    /**
     * Creates a new PelayananInformasiObat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PelayananInformasiObat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_permintaan' => $model->no_permintaan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PelayananInformasiObat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_permintaan No Permintaan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_permintaan)
    {
        $model = $this->findModel($no_permintaan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_permintaan' => $model->no_permintaan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PelayananInformasiObat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_permintaan No Permintaan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_permintaan)
    {
        $this->findModel($no_permintaan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PelayananInformasiObat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_permintaan No Permintaan
     * @return PelayananInformasiObat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_permintaan)
    {
        if (($model = PelayananInformasiObat::findOne(['no_permintaan' => $no_permintaan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
