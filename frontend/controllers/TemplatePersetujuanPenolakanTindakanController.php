<?php

namespace frontend\controllers;

use frontend\models\TemplatePersetujuanPenolakanTindakan;
use frontend\models\TemplatePersetujuanPenolakanTindakanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TemplatePersetujuanPenolakanTindakanController implements the CRUD actions for TemplatePersetujuanPenolakanTindakan model.
 */
class TemplatePersetujuanPenolakanTindakanController extends Controller
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
     * Lists all TemplatePersetujuanPenolakanTindakan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TemplatePersetujuanPenolakanTindakanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TemplatePersetujuanPenolakanTindakan model.
     * @param string $kode_template Kode Template
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_template)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_template),
        ]);
    }

    /**
     * Creates a new TemplatePersetujuanPenolakanTindakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TemplatePersetujuanPenolakanTindakan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_template' => $model->kode_template]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TemplatePersetujuanPenolakanTindakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_template Kode Template
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_template)
    {
        $model = $this->findModel($kode_template);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_template' => $model->kode_template]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TemplatePersetujuanPenolakanTindakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_template Kode Template
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_template)
    {
        $this->findModel($kode_template)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TemplatePersetujuanPenolakanTindakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_template Kode Template
     * @return TemplatePersetujuanPenolakanTindakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_template)
    {
        if (($model = TemplatePersetujuanPenolakanTindakan::findOne(['kode_template' => $kode_template])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
