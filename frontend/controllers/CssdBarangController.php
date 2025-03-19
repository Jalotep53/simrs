<?php

namespace frontend\controllers;

use frontend\models\CssdBarang;
use frontend\models\CssdBarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CssdBarangController implements the CRUD actions for CssdBarang model.
 */
class CssdBarangController extends Controller
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
     * Lists all CssdBarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CssdBarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CssdBarang model.
     * @param string $no_inventaris No Inventaris
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_inventaris)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_inventaris),
        ]);
    }

    /**
     * Creates a new CssdBarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CssdBarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_inventaris' => $model->no_inventaris]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CssdBarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_inventaris No Inventaris
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_inventaris)
    {
        $model = $this->findModel($no_inventaris);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_inventaris' => $model->no_inventaris]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CssdBarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_inventaris No Inventaris
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_inventaris)
    {
        $this->findModel($no_inventaris)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CssdBarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_inventaris No Inventaris
     * @return CssdBarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_inventaris)
    {
        if (($model = CssdBarang::findOne(['no_inventaris' => $no_inventaris])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
