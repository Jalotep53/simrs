<?php

namespace frontend\controllers;

use frontend\models\PerpustakaanAnggota;
use frontend\models\PerpustakaanAnggotaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerpustakaanAnggotaController implements the CRUD actions for PerpustakaanAnggota model.
 */
class PerpustakaanAnggotaController extends Controller
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
     * Lists all PerpustakaanAnggota models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerpustakaanAnggotaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerpustakaanAnggota model.
     * @param string $no_anggota No Anggota
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_anggota)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_anggota),
        ]);
    }

    /**
     * Creates a new PerpustakaanAnggota model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerpustakaanAnggota();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_anggota' => $model->no_anggota]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerpustakaanAnggota model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_anggota No Anggota
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_anggota)
    {
        $model = $this->findModel($no_anggota);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_anggota' => $model->no_anggota]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerpustakaanAnggota model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_anggota No Anggota
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_anggota)
    {
        $this->findModel($no_anggota)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerpustakaanAnggota model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_anggota No Anggota
     * @return PerpustakaanAnggota the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_anggota)
    {
        if (($model = PerpustakaanAnggota::findOne(['no_anggota' => $no_anggota])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
