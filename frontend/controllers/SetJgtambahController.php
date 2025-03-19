<?php

namespace frontend\controllers;

use frontend\models\SetJgtambah;
use frontend\models\SetJgtambahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetJgtambahController implements the CRUD actions for SetJgtambah model.
 */
class SetJgtambahController extends Controller
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
     * Lists all SetJgtambah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetJgtambahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetJgtambah model.
     * @param string $pendidikan Pendidikan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($pendidikan)
    {
        return $this->render('view', [
            'model' => $this->findModel($pendidikan),
        ]);
    }

    /**
     * Creates a new SetJgtambah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetJgtambah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'pendidikan' => $model->pendidikan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetJgtambah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $pendidikan Pendidikan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($pendidikan)
    {
        $model = $this->findModel($pendidikan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pendidikan' => $model->pendidikan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetJgtambah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $pendidikan Pendidikan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($pendidikan)
    {
        $this->findModel($pendidikan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetJgtambah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $pendidikan Pendidikan
     * @return SetJgtambah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($pendidikan)
    {
        if (($model = SetJgtambah::findOne(['pendidikan' => $pendidikan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
