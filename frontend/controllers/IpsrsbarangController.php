<?php

namespace frontend\controllers;

use frontend\models\Ipsrsbarang;
use frontend\models\IpsrsbarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IpsrsbarangController implements the CRUD actions for Ipsrsbarang model.
 */
class IpsrsbarangController extends Controller
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
     * Lists all Ipsrsbarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IpsrsbarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ipsrsbarang model.
     * @param string $kode_brng Kode Brng
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_brng)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_brng),
        ]);
    }

    /**
     * Creates a new Ipsrsbarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ipsrsbarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_brng' => $model->kode_brng]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ipsrsbarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_brng Kode Brng
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_brng)
    {
        $model = $this->findModel($kode_brng);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_brng' => $model->kode_brng]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ipsrsbarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_brng Kode Brng
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_brng)
    {
        $this->findModel($kode_brng)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ipsrsbarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_brng Kode Brng
     * @return Ipsrsbarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_brng)
    {
        if (($model = Ipsrsbarang::findOne(['kode_brng' => $kode_brng])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
