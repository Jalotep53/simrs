<?php

namespace frontend\controllers;

use frontend\models\Tindakan;
use frontend\models\TindakanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TindakanController implements the CRUD actions for Tindakan model.
 */
class TindakanController extends Controller
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
     * Lists all Tindakan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TindakanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tindakan model.
     * @param string $tgl Tgl
     * @param int $id ID
     * @param int $tnd Tnd
     * @param string $nm_pasien Nm Pasien
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl, $id, $tnd, $nm_pasien)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl, $id, $tnd, $nm_pasien),
        ]);
    }

    /**
     * Creates a new Tindakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tindakan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl' => $model->tgl, 'id' => $model->id, 'tnd' => $model->tnd, 'nm_pasien' => $model->nm_pasien]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tindakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl Tgl
     * @param int $id ID
     * @param int $tnd Tnd
     * @param string $nm_pasien Nm Pasien
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl, $id, $tnd, $nm_pasien)
    {
        $model = $this->findModel($tgl, $id, $tnd, $nm_pasien);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl' => $model->tgl, 'id' => $model->id, 'tnd' => $model->tnd, 'nm_pasien' => $model->nm_pasien]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tindakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl Tgl
     * @param int $id ID
     * @param int $tnd Tnd
     * @param string $nm_pasien Nm Pasien
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl, $id, $tnd, $nm_pasien)
    {
        $this->findModel($tgl, $id, $tnd, $nm_pasien)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tindakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl Tgl
     * @param int $id ID
     * @param int $tnd Tnd
     * @param string $nm_pasien Nm Pasien
     * @return Tindakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl, $id, $tnd, $nm_pasien)
    {
        if (($model = Tindakan::findOne(['tgl' => $tgl, 'id' => $id, 'tnd' => $tnd, 'nm_pasien' => $nm_pasien])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
