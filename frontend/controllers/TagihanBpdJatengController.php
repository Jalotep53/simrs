<?php

namespace frontend\controllers;

use frontend\models\TagihanBpdJateng;
use frontend\models\TagihanBpdJatengSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TagihanBpdJatengController implements the CRUD actions for TagihanBpdJateng model.
 */
class TagihanBpdJatengController extends Controller
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
     * Lists all TagihanBpdJateng models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TagihanBpdJatengSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TagihanBpdJateng model.
     * @param string $no_nota No Nota
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_nota)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_nota),
        ]);
    }

    /**
     * Creates a new TagihanBpdJateng model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TagihanBpdJateng();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_nota' => $model->no_nota]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TagihanBpdJateng model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_nota No Nota
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_nota)
    {
        $model = $this->findModel($no_nota);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_nota' => $model->no_nota]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TagihanBpdJateng model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_nota No Nota
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_nota)
    {
        $this->findModel($no_nota)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TagihanBpdJateng model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_nota No Nota
     * @return TagihanBpdJateng the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_nota)
    {
        if (($model = TagihanBpdJateng::findOne(['no_nota' => $no_nota])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
