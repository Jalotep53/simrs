<?php

namespace frontend\controllers;

use frontend\models\SuratKeluarSetNomor;
use frontend\models\SuratKeluarSetNomorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratKeluarSetNomorController implements the CRUD actions for SuratKeluarSetNomor model.
 */
class SuratKeluarSetNomorController extends Controller
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
     * Lists all SuratKeluarSetNomor models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratKeluarSetNomorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratKeluarSetNomor model.
     * @param int $id_no_surat Id No Surat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_no_surat)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_no_surat),
        ]);
    }

    /**
     * Creates a new SuratKeluarSetNomor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratKeluarSetNomor();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_no_surat' => $model->id_no_surat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SuratKeluarSetNomor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_no_surat Id No Surat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_no_surat)
    {
        $model = $this->findModel($id_no_surat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_no_surat' => $model->id_no_surat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratKeluarSetNomor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_no_surat Id No Surat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_no_surat)
    {
        $this->findModel($id_no_surat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratKeluarSetNomor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_no_surat Id No Surat
     * @return SuratKeluarSetNomor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_no_surat)
    {
        if (($model = SuratKeluarSetNomor::findOne(['id_no_surat' => $id_no_surat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
