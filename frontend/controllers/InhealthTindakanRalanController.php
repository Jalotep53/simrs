<?php

namespace frontend\controllers;

use frontend\models\InhealthTindakanRalan;
use frontend\models\InhealthTindakanRalanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InhealthTindakanRalanController implements the CRUD actions for InhealthTindakanRalan model.
 */
class InhealthTindakanRalanController extends Controller
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
     * Lists all InhealthTindakanRalan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InhealthTindakanRalanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InhealthTindakanRalan model.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jenis_prw)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jenis_prw),
        ]);
    }

    /**
     * Creates a new InhealthTindakanRalan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InhealthTindakanRalan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jenis_prw' => $model->kd_jenis_prw]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InhealthTindakanRalan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jenis_prw)
    {
        $model = $this->findModel($kd_jenis_prw);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jenis_prw' => $model->kd_jenis_prw]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InhealthTindakanRalan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jenis_prw)
    {
        $this->findModel($kd_jenis_prw)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InhealthTindakanRalan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return InhealthTindakanRalan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jenis_prw)
    {
        if (($model = InhealthTindakanRalan::findOne(['kd_jenis_prw' => $kd_jenis_prw])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
