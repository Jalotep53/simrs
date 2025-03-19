<?php

namespace frontend\controllers;

use frontend\models\Ipsrsjenisbarang;
use frontend\models\IpsrsjenisbarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IpsrsjenisbarangController implements the CRUD actions for Ipsrsjenisbarang model.
 */
class IpsrsjenisbarangController extends Controller
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
     * Lists all Ipsrsjenisbarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IpsrsjenisbarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ipsrsjenisbarang model.
     * @param string $kd_jenis Kd Jenis
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jenis)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jenis),
        ]);
    }

    /**
     * Creates a new Ipsrsjenisbarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ipsrsjenisbarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jenis' => $model->kd_jenis]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ipsrsjenisbarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jenis Kd Jenis
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jenis)
    {
        $model = $this->findModel($kd_jenis);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jenis' => $model->kd_jenis]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ipsrsjenisbarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jenis Kd Jenis
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jenis)
    {
        $this->findModel($kd_jenis)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ipsrsjenisbarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jenis Kd Jenis
     * @return Ipsrsjenisbarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jenis)
    {
        if (($model = Ipsrsjenisbarang::findOne(['kd_jenis' => $kd_jenis])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
