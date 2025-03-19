<?php

namespace frontend\controllers;

use frontend\models\IpsrsDetailTitipFaktur;
use frontend\models\IpsrsDetailTitipFakturSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IpsrsDetailTitipFakturController implements the CRUD actions for IpsrsDetailTitipFaktur model.
 */
class IpsrsDetailTitipFakturController extends Controller
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
     * Lists all IpsrsDetailTitipFaktur models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IpsrsDetailTitipFakturSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IpsrsDetailTitipFaktur model.
     * @param string $no_tagihan No Tagihan
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_tagihan, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_tagihan, $no_faktur),
        ]);
    }

    /**
     * Creates a new IpsrsDetailTitipFaktur model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new IpsrsDetailTitipFaktur();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_tagihan' => $model->no_tagihan, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing IpsrsDetailTitipFaktur model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_tagihan No Tagihan
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_tagihan, $no_faktur)
    {
        $model = $this->findModel($no_tagihan, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_tagihan' => $model->no_tagihan, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IpsrsDetailTitipFaktur model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_tagihan No Tagihan
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_tagihan, $no_faktur)
    {
        $this->findModel($no_tagihan, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the IpsrsDetailTitipFaktur model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_tagihan No Tagihan
     * @param string $no_faktur No Faktur
     * @return IpsrsDetailTitipFaktur the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_tagihan, $no_faktur)
    {
        if (($model = IpsrsDetailTitipFaktur::findOne(['no_tagihan' => $no_tagihan, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
