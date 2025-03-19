<?php

namespace frontend\controllers;

use frontend\models\ChecklistKriteriaKeluarHcu;
use frontend\models\ChecklistKriteriaKeluarHcuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChecklistKriteriaKeluarHcuController implements the CRUD actions for ChecklistKriteriaKeluarHcu model.
 */
class ChecklistKriteriaKeluarHcuController extends Controller
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
     * Lists all ChecklistKriteriaKeluarHcu models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ChecklistKriteriaKeluarHcuSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ChecklistKriteriaKeluarHcu model.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tanggal),
        ]);
    }

    /**
     * Creates a new ChecklistKriteriaKeluarHcu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ChecklistKriteriaKeluarHcu();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ChecklistKriteriaKeluarHcu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tanggal)
    {
        $model = $this->findModel($no_rawat, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ChecklistKriteriaKeluarHcu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tanggal)
    {
        $this->findModel($no_rawat, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ChecklistKriteriaKeluarHcu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @return ChecklistKriteriaKeluarHcu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tanggal)
    {
        if (($model = ChecklistKriteriaKeluarHcu::findOne(['no_rawat' => $no_rawat, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
