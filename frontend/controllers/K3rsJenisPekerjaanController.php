<?php

namespace frontend\controllers;

use frontend\models\K3rsJenisPekerjaan;
use frontend\models\K3rsJenisPekerjaanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * K3rsJenisPekerjaanController implements the CRUD actions for K3rsJenisPekerjaan model.
 */
class K3rsJenisPekerjaanController extends Controller
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
     * Lists all K3rsJenisPekerjaan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new K3rsJenisPekerjaanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single K3rsJenisPekerjaan model.
     * @param string $kode_pekerjaan Kode Pekerjaan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_pekerjaan)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_pekerjaan),
        ]);
    }

    /**
     * Creates a new K3rsJenisPekerjaan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new K3rsJenisPekerjaan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_pekerjaan' => $model->kode_pekerjaan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing K3rsJenisPekerjaan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_pekerjaan Kode Pekerjaan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_pekerjaan)
    {
        $model = $this->findModel($kode_pekerjaan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_pekerjaan' => $model->kode_pekerjaan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing K3rsJenisPekerjaan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_pekerjaan Kode Pekerjaan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_pekerjaan)
    {
        $this->findModel($kode_pekerjaan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the K3rsJenisPekerjaan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_pekerjaan Kode Pekerjaan
     * @return K3rsJenisPekerjaan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_pekerjaan)
    {
        if (($model = K3rsJenisPekerjaan::findOne(['kode_pekerjaan' => $kode_pekerjaan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
