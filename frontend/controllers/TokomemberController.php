<?php

namespace frontend\controllers;

use frontend\models\Tokomember;
use frontend\models\TokomemberSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TokomemberController implements the CRUD actions for Tokomember model.
 */
class TokomemberController extends Controller
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
     * Lists all Tokomember models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TokomemberSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tokomember model.
     * @param string $no_member No Member
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_member)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_member),
        ]);
    }

    /**
     * Creates a new Tokomember model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tokomember();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_member' => $model->no_member]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tokomember model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_member No Member
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_member)
    {
        $model = $this->findModel($no_member);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_member' => $model->no_member]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tokomember model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_member No Member
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_member)
    {
        $this->findModel($no_member)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tokomember model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_member No Member
     * @return Tokomember the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_member)
    {
        if (($model = Tokomember::findOne(['no_member' => $no_member])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
