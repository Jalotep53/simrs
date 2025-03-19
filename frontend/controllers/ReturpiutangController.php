<?php

namespace frontend\controllers;

use frontend\models\Returpiutang;
use frontend\models\ReturpiutangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReturpiutangController implements the CRUD actions for Returpiutang model.
 */
class ReturpiutangController extends Controller
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
     * Lists all Returpiutang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ReturpiutangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Returpiutang model.
     * @param string $no_retur_piutang No Retur Piutang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_retur_piutang)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_retur_piutang),
        ]);
    }

    /**
     * Creates a new Returpiutang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Returpiutang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_retur_piutang' => $model->no_retur_piutang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Returpiutang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_retur_piutang No Retur Piutang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_retur_piutang)
    {
        $model = $this->findModel($no_retur_piutang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_retur_piutang' => $model->no_retur_piutang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Returpiutang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_retur_piutang No Retur Piutang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_retur_piutang)
    {
        $this->findModel($no_retur_piutang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Returpiutang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_retur_piutang No Retur Piutang
     * @return Returpiutang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_retur_piutang)
    {
        if (($model = Returpiutang::findOne(['no_retur_piutang' => $no_retur_piutang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
