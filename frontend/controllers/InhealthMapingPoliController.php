<?php

namespace frontend\controllers;

use frontend\models\InhealthMapingPoli;
use frontend\models\InhealthMapingPoliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InhealthMapingPoliController implements the CRUD actions for InhealthMapingPoli model.
 */
class InhealthMapingPoliController extends Controller
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
     * Lists all InhealthMapingPoli models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InhealthMapingPoliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InhealthMapingPoli model.
     * @param string $kd_poli_rs Kd Poli Rs
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_poli_rs)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_poli_rs),
        ]);
    }

    /**
     * Creates a new InhealthMapingPoli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InhealthMapingPoli();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_poli_rs' => $model->kd_poli_rs]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InhealthMapingPoli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_poli_rs Kd Poli Rs
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_poli_rs)
    {
        $model = $this->findModel($kd_poli_rs);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_poli_rs' => $model->kd_poli_rs]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InhealthMapingPoli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_poli_rs Kd Poli Rs
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_poli_rs)
    {
        $this->findModel($kd_poli_rs)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InhealthMapingPoli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_poli_rs Kd Poli Rs
     * @return InhealthMapingPoli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_poli_rs)
    {
        if (($model = InhealthMapingPoli::findOne(['kd_poli_rs' => $kd_poli_rs])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
