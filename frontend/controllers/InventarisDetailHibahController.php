<?php

namespace frontend\controllers;

use frontend\models\InventarisDetailHibah;
use frontend\models\InventarisDetailHibahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InventarisDetailHibahController implements the CRUD actions for InventarisDetailHibah model.
 */
class InventarisDetailHibahController extends Controller
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
     * Lists all InventarisDetailHibah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InventarisDetailHibahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InventarisDetailHibah model.
     * @param string $no_hibah No Hibah
     * @param string $kode_barang Kode Barang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_hibah, $kode_barang)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_hibah, $kode_barang),
        ]);
    }

    /**
     * Creates a new InventarisDetailHibah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InventarisDetailHibah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_hibah' => $model->no_hibah, 'kode_barang' => $model->kode_barang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InventarisDetailHibah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_hibah No Hibah
     * @param string $kode_barang Kode Barang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_hibah, $kode_barang)
    {
        $model = $this->findModel($no_hibah, $kode_barang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_hibah' => $model->no_hibah, 'kode_barang' => $model->kode_barang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InventarisDetailHibah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_hibah No Hibah
     * @param string $kode_barang Kode Barang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_hibah, $kode_barang)
    {
        $this->findModel($no_hibah, $kode_barang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InventarisDetailHibah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_hibah No Hibah
     * @param string $kode_barang Kode Barang
     * @return InventarisDetailHibah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_hibah, $kode_barang)
    {
        if (($model = InventarisDetailHibah::findOne(['no_hibah' => $no_hibah, 'kode_barang' => $kode_barang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
