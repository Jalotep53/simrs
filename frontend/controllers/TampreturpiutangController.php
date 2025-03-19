<?php

namespace frontend\controllers;

use frontend\models\Tampreturpiutang;
use frontend\models\TampreturpiutangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TampreturpiutangController implements the CRUD actions for Tampreturpiutang model.
 */
class TampreturpiutangController extends Controller
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
     * Lists all Tampreturpiutang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TampreturpiutangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tampreturpiutang model.
     * @param string $nota_piutang Nota Piutang
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nota_piutang, $kode_brng, $no_batch)
    {
        return $this->render('view', [
            'model' => $this->findModel($nota_piutang, $kode_brng, $no_batch),
        ]);
    }

    /**
     * Creates a new Tampreturpiutang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tampreturpiutang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nota_piutang' => $model->nota_piutang, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tampreturpiutang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nota_piutang Nota Piutang
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nota_piutang, $kode_brng, $no_batch)
    {
        $model = $this->findModel($nota_piutang, $kode_brng, $no_batch);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nota_piutang' => $model->nota_piutang, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tampreturpiutang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nota_piutang Nota Piutang
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nota_piutang, $kode_brng, $no_batch)
    {
        $this->findModel($nota_piutang, $kode_brng, $no_batch)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tampreturpiutang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nota_piutang Nota Piutang
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @return Tampreturpiutang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nota_piutang, $kode_brng, $no_batch)
    {
        if (($model = Tampreturpiutang::findOne(['nota_piutang' => $nota_piutang, 'kode_brng' => $kode_brng, 'no_batch' => $no_batch])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
