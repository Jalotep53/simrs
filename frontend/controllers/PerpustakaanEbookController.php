<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanEbook;
use frontend\models\PerpustakaanEbookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanEbookController implements the CRUD actions for PerpustakaanEbook model.
 */
class PerpustakaanEbookController extends Controller
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
     * Lists all PerpustakaanEbook models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanEbookSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanEbook model.
     * @param string $kode_ebook Kode Ebook
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_ebook)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_ebook),
        ]);
    }

    /**
     * Creates a new PerpustakaanEbook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanEbook();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_ebook' => $model->kode_ebook]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanEbook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_ebook Kode Ebook
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_ebook)
    {
        $model = $this->findModel($kode_ebook);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_ebook' => $model->kode_ebook]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanEbook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_ebook Kode Ebook
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_ebook)
    {
        $this->findModel($kode_ebook)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanEbook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_ebook Kode Ebook
     * @return PerpustakaanEbook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_ebook)
    {
        if (($model = PerpustakaanEbook::findOne(['kode_ebook' => $kode_ebook])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
