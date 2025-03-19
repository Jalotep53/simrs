<?php

namespace frontend\controllers;

use frontend\models\AuditKepatuhanApd;
use frontend\models\AuditKepatuhanApdSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AuditKepatuhanApdController implements the CRUD actions for AuditKepatuhanApd model.
 */
class AuditKepatuhanApdController extends Controller
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
     * Lists all AuditKepatuhanApd models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AuditKepatuhanApdSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AuditKepatuhanApd model.
     * @param string $nik Nik
     * @param string $tindakan Tindakan
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nik, $tindakan, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($nik, $tindakan, $tanggal),
        ]);
    }

    /**
     * Creates a new AuditKepatuhanApd model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AuditKepatuhanApd();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nik' => $model->nik, 'tindakan' => $model->tindakan, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AuditKepatuhanApd model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nik Nik
     * @param string $tindakan Tindakan
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nik, $tindakan, $tanggal)
    {
        $model = $this->findModel($nik, $tindakan, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nik' => $model->nik, 'tindakan' => $model->tindakan, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AuditKepatuhanApd model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nik Nik
     * @param string $tindakan Tindakan
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nik, $tindakan, $tanggal)
    {
        $this->findModel($nik, $tindakan, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuditKepatuhanApd model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nik Nik
     * @param string $tindakan Tindakan
     * @param string $tanggal Tanggal
     * @return AuditKepatuhanApd the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nik, $tindakan, $tanggal)
    {
        if (($model = AuditKepatuhanApd::findOne(['nik' => $nik, 'tindakan' => $tindakan, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
