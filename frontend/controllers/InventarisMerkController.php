<?php

namespace frontend\controllers;

use frontend\models\InventarisMerk;
use frontend\models\InventarisMerkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InventarisMerkController implements the CRUD actions for InventarisMerk model.
 */
class InventarisMerkController extends Controller
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
     * Lists all InventarisMerk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InventarisMerkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InventarisMerk model.
     * @param string $id_merk Id Merk
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_merk)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_merk),
        ]);
    }

    /**
     * Creates a new InventarisMerk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InventarisMerk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_merk' => $model->id_merk]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InventarisMerk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_merk Id Merk
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_merk)
    {
        $model = $this->findModel($id_merk);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_merk' => $model->id_merk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InventarisMerk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_merk Id Merk
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_merk)
    {
        $this->findModel($id_merk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InventarisMerk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_merk Id Merk
     * @return InventarisMerk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_merk)
    {
        if (($model = InventarisMerk::findOne(['id_merk' => $id_merk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
