<?php

namespace frontend\controllers;

use frontend\models\InventarisHibah;
use frontend\models\InventarisHibahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InventarisHibahController implements the CRUD actions for InventarisHibah model.
 */
class InventarisHibahController extends Controller
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
     * Lists all InventarisHibah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InventarisHibahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InventarisHibah model.
     * @param string $no_hibah No Hibah
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_hibah)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_hibah),
        ]);
    }

    /**
     * Creates a new InventarisHibah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InventarisHibah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_hibah' => $model->no_hibah]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InventarisHibah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_hibah No Hibah
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_hibah)
    {
        $model = $this->findModel($no_hibah);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_hibah' => $model->no_hibah]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InventarisHibah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_hibah No Hibah
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_hibah)
    {
        $this->findModel($no_hibah)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InventarisHibah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_hibah No Hibah
     * @return InventarisHibah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_hibah)
    {
        if (($model = InventarisHibah::findOne(['no_hibah' => $no_hibah])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
