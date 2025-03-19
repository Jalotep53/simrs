<?php

namespace frontend\controllers;

use frontend\models\PermintaanObat;
use frontend\models\PermintaanObatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PermintaanObatController implements the CRUD actions for PermintaanObat model.
 */
class PermintaanObatController extends Controller
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
     * Lists all PermintaanObat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PermintaanObatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PermintaanObat model.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $jam, $no_rawat, $kode_brng)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $jam, $no_rawat, $kode_brng),
        ]);
    }

    /**
     * Creates a new PermintaanObat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PermintaanObat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PermintaanObat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $jam, $no_rawat, $kode_brng)
    {
        $model = $this->findModel($tanggal, $jam, $no_rawat, $kode_brng);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PermintaanObat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $jam, $no_rawat, $kode_brng)
    {
        $this->findModel($tanggal, $jam, $no_rawat, $kode_brng)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PermintaanObat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @return PermintaanObat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $jam, $no_rawat, $kode_brng)
    {
        if (($model = PermintaanObat::findOne(['tanggal' => $tanggal, 'jam' => $jam, 'no_rawat' => $no_rawat, 'kode_brng' => $kode_brng])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
