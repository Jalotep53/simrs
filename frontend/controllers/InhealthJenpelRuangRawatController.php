<?php

namespace frontend\controllers;

use frontend\models\InhealthJenpelRuangRawat;
use frontend\models\InhealthJenpelRuangRawatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InhealthJenpelRuangRawatController implements the CRUD actions for InhealthJenpelRuangRawat model.
 */
class InhealthJenpelRuangRawatController extends Controller
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
     * Lists all InhealthJenpelRuangRawat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InhealthJenpelRuangRawatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InhealthJenpelRuangRawat model.
     * @param string $kd_kamar Kd Kamar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_kamar)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_kamar),
        ]);
    }

    /**
     * Creates a new InhealthJenpelRuangRawat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InhealthJenpelRuangRawat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_kamar' => $model->kd_kamar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InhealthJenpelRuangRawat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_kamar Kd Kamar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_kamar)
    {
        $model = $this->findModel($kd_kamar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_kamar' => $model->kd_kamar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InhealthJenpelRuangRawat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_kamar Kd Kamar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_kamar)
    {
        $this->findModel($kd_kamar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InhealthJenpelRuangRawat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_kamar Kd Kamar
     * @return InhealthJenpelRuangRawat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_kamar)
    {
        if (($model = InhealthJenpelRuangRawat::findOne(['kd_kamar' => $kd_kamar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
