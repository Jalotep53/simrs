<?php

namespace frontend\controllers;

use frontend\models\Antriloketcetak;
use frontend\models\AntriloketcetakSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AntriloketcetakController implements the CRUD actions for Antriloketcetak model.
 */
class AntriloketcetakController extends Controller
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
     * Lists all Antriloketcetak models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AntriloketcetakSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Antriloketcetak model.
     * @param string $tanggal Tanggal
     * @param string $nomor Nomor
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $nomor)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $nomor),
        ]);
    }

    /**
     * Creates a new Antriloketcetak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Antriloketcetak();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'nomor' => $model->nomor]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Antriloketcetak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $nomor Nomor
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $nomor)
    {
        $model = $this->findModel($tanggal, $nomor);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'nomor' => $model->nomor]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Antriloketcetak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $nomor Nomor
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $nomor)
    {
        $this->findModel($tanggal, $nomor)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Antriloketcetak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $nomor Nomor
     * @return Antriloketcetak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $nomor)
    {
        if (($model = Antriloketcetak::findOne(['tanggal' => $tanggal, 'nomor' => $nomor])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
