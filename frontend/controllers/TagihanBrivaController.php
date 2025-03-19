<?php

namespace frontend\controllers;

use frontend\models\TagihanBriva;
use frontend\models\TagihanBrivaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TagihanBrivaController implements the CRUD actions for TagihanBriva model.
 */
class TagihanBrivaController extends Controller
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
     * Lists all TagihanBriva models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TagihanBrivaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TagihanBriva model.
     * @param string $no_tagihan No Tagihan
     * @param string $status_tagihan Status Tagihan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_tagihan, $status_tagihan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_tagihan, $status_tagihan),
        ]);
    }

    /**
     * Creates a new TagihanBriva model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TagihanBriva();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_tagihan' => $model->no_tagihan, 'status_tagihan' => $model->status_tagihan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TagihanBriva model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_tagihan No Tagihan
     * @param string $status_tagihan Status Tagihan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_tagihan, $status_tagihan)
    {
        $model = $this->findModel($no_tagihan, $status_tagihan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_tagihan' => $model->no_tagihan, 'status_tagihan' => $model->status_tagihan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TagihanBriva model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_tagihan No Tagihan
     * @param string $status_tagihan Status Tagihan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_tagihan, $status_tagihan)
    {
        $this->findModel($no_tagihan, $status_tagihan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TagihanBriva model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_tagihan No Tagihan
     * @param string $status_tagihan Status Tagihan
     * @return TagihanBriva the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_tagihan, $status_tagihan)
    {
        if (($model = TagihanBriva::findOne(['no_tagihan' => $no_tagihan, 'status_tagihan' => $status_tagihan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
