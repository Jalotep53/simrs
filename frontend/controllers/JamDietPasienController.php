<?php

namespace frontend\controllers;

use frontend\models\JamDietPasien;
use frontend\models\JamDietPasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JamDietPasienController implements the CRUD actions for JamDietPasien model.
 */
class JamDietPasienController extends Controller
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
     * Lists all JamDietPasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JamDietPasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JamDietPasien model.
     * @param string $waktu Waktu
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($waktu)
    {
        return $this->render('view', [
            'model' => $this->findModel($waktu),
        ]);
    }

    /**
     * Creates a new JamDietPasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new JamDietPasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'waktu' => $model->waktu]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JamDietPasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $waktu Waktu
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($waktu)
    {
        $model = $this->findModel($waktu);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'waktu' => $model->waktu]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JamDietPasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $waktu Waktu
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($waktu)
    {
        $this->findModel($waktu)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JamDietPasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $waktu Waktu
     * @return JamDietPasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($waktu)
    {
        if (($model = JamDietPasien::findOne(['waktu' => $waktu])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
