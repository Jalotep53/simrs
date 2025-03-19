<?php

namespace frontend\controllers;

use frontend\models\Dapuropname;
use frontend\models\DapuropnameSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DapuropnameController implements the CRUD actions for Dapuropname model.
 */
class DapuropnameController extends Controller
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
     * Lists all Dapuropname models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DapuropnameSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dapuropname model.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_brng, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_brng, $tanggal),
        ]);
    }

    /**
     * Creates a new Dapuropname model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Dapuropname();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dapuropname model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_brng, $tanggal)
    {
        $model = $this->findModel($kode_brng, $tanggal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dapuropname model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_brng, $tanggal)
    {
        $this->findModel($kode_brng, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dapuropname model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @return Dapuropname the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_brng, $tanggal)
    {
        if (($model = Dapuropname::findOne(['kode_brng' => $kode_brng, 'tanggal' => $tanggal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
