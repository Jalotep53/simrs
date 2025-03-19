<?php

namespace frontend\controllers;

use frontend\models\PiutangLainlain;
use frontend\models\PiutangLainlainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PiutangLainlainController implements the CRUD actions for PiutangLainlain model.
 */
class PiutangLainlainController extends Controller
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
     * Lists all PiutangLainlain models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PiutangLainlainSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PiutangLainlain model.
     * @param string $nota_piutang Nota Piutang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nota_piutang)
    {
        return $this->render('view', [
            'model' => $this->findModel($nota_piutang),
        ]);
    }

    /**
     * Creates a new PiutangLainlain model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PiutangLainlain();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nota_piutang' => $model->nota_piutang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PiutangLainlain model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nota_piutang Nota Piutang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nota_piutang)
    {
        $model = $this->findModel($nota_piutang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nota_piutang' => $model->nota_piutang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PiutangLainlain model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nota_piutang Nota Piutang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nota_piutang)
    {
        $this->findModel($nota_piutang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PiutangLainlain model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nota_piutang Nota Piutang
     * @return PiutangLainlain the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nota_piutang)
    {
        if (($model = PiutangLainlain::findOne(['nota_piutang' => $nota_piutang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
