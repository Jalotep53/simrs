<?php

namespace frontend\controllers;

use frontend\models\PemantauanPewsAnak;
use frontend\models\PemantauanPewsAnakSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PemantauanPewsAnakController implements the CRUD actions for PemantauanPewsAnak model.
 */
class PemantauanPewsAnakController extends Controller
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
     * Lists all PemantauanPewsAnak models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PemantauanPewsAnakSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PemantauanPewsAnak model.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tanggal),
        ]);
    }

    /**
     * Creates a new PemantauanPewsAnak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PemantauanPewsAnak();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PemantauanPewsAnak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tanggal)
    {
        $model = $this->findModel($no_rawat, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PemantauanPewsAnak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tanggal)
    {
        $this->findModel($no_rawat, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PemantauanPewsAnak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @return PemantauanPewsAnak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tanggal)
    {
        if (($model = PemantauanPewsAnak::findOne(['no_rawat' => $no_rawat, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
