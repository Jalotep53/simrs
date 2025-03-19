<?php

namespace frontend\controllers;

use frontend\models\Gambar;
use frontend\models\GambarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GambarController implements the CRUD actions for Gambar model.
 */
class GambarController extends Controller
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
     * Lists all Gambar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new GambarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gambar model.
     * @param int $inde Inde
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($inde)
    {
        return $this->render('view', [
            'model' => $this->findModel($inde),
        ]);
    }

    /**
     * Creates a new Gambar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Gambar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'inde' => $model->inde]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Gambar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $inde Inde
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($inde)
    {
        $model = $this->findModel($inde);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'inde' => $model->inde]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Gambar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $inde Inde
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($inde)
    {
        $this->findModel($inde)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Gambar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $inde Inde
     * @return Gambar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($inde)
    {
        if (($model = Gambar::findOne(['inde' => $inde])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
