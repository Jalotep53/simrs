<?php

namespace frontend\controllers;

use frontend\models\Piutang;
use frontend\models\PiutangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PiutangController implements the CRUD actions for Piutang model.
 */
class PiutangController extends Controller
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
     * Lists all Piutang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PiutangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Piutang model.
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
     * Creates a new Piutang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Piutang();

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
     * Updates an existing Piutang model.
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
     * Deletes an existing Piutang model.
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
     * Finds the Piutang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nota_piutang Nota Piutang
     * @return Piutang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nota_piutang)
    {
        if (($model = Piutang::findOne(['nota_piutang' => $nota_piutang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
