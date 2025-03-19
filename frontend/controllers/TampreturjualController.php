<?php

namespace frontend\controllers;

use frontend\models\Tampreturjual;
use frontend\models\TampreturjualSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TampreturjualController implements the CRUD actions for Tampreturjual model.
 */
class TampreturjualController extends Controller
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
     * Lists all Tampreturjual models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TampreturjualSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tampreturjual model.
     * @param string $nota_jual Nota Jual
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nota_jual, $kode_brng, $no_batch, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($nota_jual, $kode_brng, $no_batch, $no_faktur),
        ]);
    }

    /**
     * Creates a new Tampreturjual model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tampreturjual();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nota_jual' => $model->nota_jual, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tampreturjual model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nota_jual Nota Jual
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nota_jual, $kode_brng, $no_batch, $no_faktur)
    {
        $model = $this->findModel($nota_jual, $kode_brng, $no_batch, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nota_jual' => $model->nota_jual, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tampreturjual model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nota_jual Nota Jual
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nota_jual, $kode_brng, $no_batch, $no_faktur)
    {
        $this->findModel($nota_jual, $kode_brng, $no_batch, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tampreturjual model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nota_jual Nota Jual
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return Tampreturjual the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nota_jual, $kode_brng, $no_batch, $no_faktur)
    {
        if (($model = Tampreturjual::findOne(['nota_jual' => $nota_jual, 'kode_brng' => $kode_brng, 'no_batch' => $no_batch, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
