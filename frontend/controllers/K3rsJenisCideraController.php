<?php

namespace frontend\controllers;

use frontend\models\K3rsJenisCidera;
use frontend\models\K3rsJenisCideraSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * K3rsJenisCideraController implements the CRUD actions for K3rsJenisCidera model.
 */
class K3rsJenisCideraController extends Controller
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
     * Lists all K3rsJenisCidera models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new K3rsJenisCideraSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single K3rsJenisCidera model.
     * @param string $kode_cidera Kode Cidera
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_cidera)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_cidera),
        ]);
    }

    /**
     * Creates a new K3rsJenisCidera model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new K3rsJenisCidera();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_cidera' => $model->kode_cidera]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing K3rsJenisCidera model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_cidera Kode Cidera
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_cidera)
    {
        $model = $this->findModel($kode_cidera);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_cidera' => $model->kode_cidera]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing K3rsJenisCidera model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_cidera Kode Cidera
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_cidera)
    {
        $this->findModel($kode_cidera)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the K3rsJenisCidera model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_cidera Kode Cidera
     * @return K3rsJenisCidera the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_cidera)
    {
        if (($model = K3rsJenisCidera::findOne(['kode_cidera' => $kode_cidera])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
