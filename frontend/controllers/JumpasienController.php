<?php

namespace frontend\controllers;

use frontend\models\Jumpasien;
use frontend\models\JumpasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JumpasienController implements the CRUD actions for Jumpasien model.
 */
class JumpasienController extends Controller
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
     * Lists all Jumpasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JumpasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jumpasien model.
     * @param string $thn Thn
     * @param int $bln Bln
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($thn, $bln, $id)
    {
        return $this->render('view', [
            'model' => $this->findModel($thn, $bln, $id),
        ]);
    }

    /**
     * Creates a new Jumpasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Jumpasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'thn' => $model->thn, 'bln' => $model->bln, 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jumpasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $thn Thn
     * @param int $bln Bln
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($thn, $bln, $id)
    {
        $model = $this->findModel($thn, $bln, $id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'thn' => $model->thn, 'bln' => $model->bln, 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jumpasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $thn Thn
     * @param int $bln Bln
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($thn, $bln, $id)
    {
        $this->findModel($thn, $bln, $id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jumpasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $thn Thn
     * @param int $bln Bln
     * @param int $id ID
     * @return Jumpasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($thn, $bln, $id)
    {
        if (($model = Jumpasien::findOne(['thn' => $thn, 'bln' => $bln, 'id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
