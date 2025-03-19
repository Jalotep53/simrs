<?php

namespace frontend\controllers;

use frontend\models\Ipsrsreturbeli;
use frontend\models\IpsrsreturbeliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IpsrsreturbeliController implements the CRUD actions for Ipsrsreturbeli model.
 */
class IpsrsreturbeliController extends Controller
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
     * Lists all Ipsrsreturbeli models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IpsrsreturbeliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ipsrsreturbeli model.
     * @param string $no_retur_beli No Retur Beli
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_retur_beli)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_retur_beli),
        ]);
    }

    /**
     * Creates a new Ipsrsreturbeli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ipsrsreturbeli();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_retur_beli' => $model->no_retur_beli]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ipsrsreturbeli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_retur_beli No Retur Beli
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_retur_beli)
    {
        $model = $this->findModel($no_retur_beli);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_retur_beli' => $model->no_retur_beli]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ipsrsreturbeli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_retur_beli No Retur Beli
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_retur_beli)
    {
        $this->findModel($no_retur_beli)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ipsrsreturbeli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_retur_beli No Retur Beli
     * @return Ipsrsreturbeli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_retur_beli)
    {
        if (($model = Ipsrsreturbeli::findOne(['no_retur_beli' => $no_retur_beli])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
