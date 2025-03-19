<?php

namespace frontend\controllers;

use frontend\models\AuditPenempatanPasien;
use frontend\models\AuditPenempatanPasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AuditPenempatanPasienController implements the CRUD actions for AuditPenempatanPasien model.
 */
class AuditPenempatanPasienController extends Controller
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
     * Lists all AuditPenempatanPasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AuditPenempatanPasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AuditPenempatanPasien model.
     * @param string $tanggal Tanggal
     * @param string $id_ruang Id Ruang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $id_ruang)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $id_ruang),
        ]);
    }

    /**
     * Creates a new AuditPenempatanPasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AuditPenempatanPasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AuditPenempatanPasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $id_ruang Id Ruang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $id_ruang)
    {
        $model = $this->findModel($tanggal, $id_ruang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AuditPenempatanPasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $id_ruang Id Ruang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $id_ruang)
    {
        $this->findModel($tanggal, $id_ruang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuditPenempatanPasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $id_ruang Id Ruang
     * @return AuditPenempatanPasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $id_ruang)
    {
        if (($model = AuditPenempatanPasien::findOne(['tanggal' => $tanggal, 'id_ruang' => $id_ruang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
