<?php

namespace frontend\controllers;

use frontend\models\K3rsDampakCidera;
use frontend\models\K3rsDampakCideraSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * K3rsDampakCideraController implements the CRUD actions for K3rsDampakCidera model.
 */
class K3rsDampakCideraController extends Controller
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
     * Lists all K3rsDampakCidera models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new K3rsDampakCideraSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single K3rsDampakCidera model.
     * @param string $kode_dampak Kode Dampak
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_dampak)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_dampak),
        ]);
    }

    /**
     * Creates a new K3rsDampakCidera model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new K3rsDampakCidera();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_dampak' => $model->kode_dampak]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing K3rsDampakCidera model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_dampak Kode Dampak
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_dampak)
    {
        $model = $this->findModel($kode_dampak);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_dampak' => $model->kode_dampak]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing K3rsDampakCidera model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_dampak Kode Dampak
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_dampak)
    {
        $this->findModel($kode_dampak)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the K3rsDampakCidera model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_dampak Kode Dampak
     * @return K3rsDampakCidera the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_dampak)
    {
        if (($model = K3rsDampakCidera::findOne(['kode_dampak' => $kode_dampak])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
