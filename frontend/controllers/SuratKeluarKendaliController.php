<?php

namespace frontend\controllers;

use frontend\models\SuratKeluarKendali;
use frontend\models\SuratKeluarKendaliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratKeluarKendaliController implements the CRUD actions for SuratKeluarKendali model.
 */
class SuratKeluarKendaliController extends Controller
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
     * Lists all SuratKeluarKendali models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratKeluarKendaliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratKeluarKendali model.
     * @param string $no_kendali No Kendali
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_kendali)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_kendali),
        ]);
    }

    /**
     * Creates a new SuratKeluarKendali model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratKeluarKendali();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_kendali' => $model->no_kendali]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SuratKeluarKendali model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_kendali No Kendali
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_kendali)
    {
        $model = $this->findModel($no_kendali);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_kendali' => $model->no_kendali]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratKeluarKendali model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_kendali No Kendali
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_kendali)
    {
        $this->findModel($no_kendali)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratKeluarKendali model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_kendali No Kendali
     * @return SuratKeluarKendali the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_kendali)
    {
        if (($model = SuratKeluarKendali::findOne(['no_kendali' => $no_kendali])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
