<?php

namespace frontend\controllers;

use frontend\models\ObatRacikanJual;
use frontend\models\ObatRacikanJualSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ObatRacikanJualController implements the CRUD actions for ObatRacikanJual model.
 */
class ObatRacikanJualController extends Controller
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
     * Lists all ObatRacikanJual models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ObatRacikanJualSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ObatRacikanJual model.
     * @param string $nota_jual Nota Jual
     * @param string $no_racik No Racik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nota_jual, $no_racik)
    {
        return $this->render('view', [
            'model' => $this->findModel($nota_jual, $no_racik),
        ]);
    }

    /**
     * Creates a new ObatRacikanJual model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ObatRacikanJual();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ObatRacikanJual model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nota_jual Nota Jual
     * @param string $no_racik No Racik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nota_jual, $no_racik)
    {
        $model = $this->findModel($nota_jual, $no_racik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ObatRacikanJual model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nota_jual Nota Jual
     * @param string $no_racik No Racik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nota_jual, $no_racik)
    {
        $this->findModel($nota_jual, $no_racik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ObatRacikanJual model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nota_jual Nota Jual
     * @param string $no_racik No Racik
     * @return ObatRacikanJual the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nota_jual, $no_racik)
    {
        if (($model = ObatRacikanJual::findOne(['nota_jual' => $nota_jual, 'no_racik' => $no_racik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
