<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanInventaris;
use frontend\models\PerpustakaanInventarisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanInventarisController implements the CRUD actions for PerpustakaanInventaris model.
 */
class PerpustakaanInventarisController extends Controller
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
     * Lists all PerpustakaanInventaris models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanInventarisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanInventaris model.
     * @param string $no_inventaris No Inventaris
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_inventaris)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_inventaris),
        ]);
    }

    /**
     * Creates a new PerpustakaanInventaris model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanInventaris();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_inventaris' => $model->no_inventaris]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanInventaris model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_inventaris No Inventaris
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_inventaris)
    {
        $model = $this->findModel($no_inventaris);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_inventaris' => $model->no_inventaris]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanInventaris model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_inventaris No Inventaris
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_inventaris)
    {
        $this->findModel($no_inventaris)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanInventaris model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_inventaris No Inventaris
     * @return PerpustakaanInventaris the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_inventaris)
    {
        if (($model = PerpustakaanInventaris::findOne(['no_inventaris' => $no_inventaris])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
