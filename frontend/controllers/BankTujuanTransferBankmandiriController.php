<?php

namespace frontend\controllers;

use frontend\models\BankTujuanTransferBankmandiri;
use frontend\models\BankTujuanTransferBankmandiriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BankTujuanTransferBankmandiriController implements the CRUD actions for BankTujuanTransferBankmandiri model.
 */
class BankTujuanTransferBankmandiriController extends Controller
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
     * Lists all BankTujuanTransferBankmandiri models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BankTujuanTransferBankmandiriSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BankTujuanTransferBankmandiri model.
     * @param string $kode_bank Kode Bank
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_bank)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_bank),
        ]);
    }

    /**
     * Creates a new BankTujuanTransferBankmandiri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BankTujuanTransferBankmandiri();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_bank' => $model->kode_bank]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BankTujuanTransferBankmandiri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_bank Kode Bank
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_bank)
    {
        $model = $this->findModel($kode_bank);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_bank' => $model->kode_bank]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BankTujuanTransferBankmandiri model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_bank Kode Bank
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_bank)
    {
        $this->findModel($kode_bank)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BankTujuanTransferBankmandiri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_bank Kode Bank
     * @return BankTujuanTransferBankmandiri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_bank)
    {
        if (($model = BankTujuanTransferBankmandiri::findOne(['kode_bank' => $kode_bank])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
