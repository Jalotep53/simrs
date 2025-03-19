<?php

namespace frontend\controllers;

use frontend\models\CatatanKeperawatanRanap;
use frontend\models\CatatanKeperawatanRanapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CatatanKeperawatanRanapController implements the CRUD actions for CatatanKeperawatanRanap model.
 */
class CatatanKeperawatanRanapController extends Controller
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
     * Lists all CatatanKeperawatanRanap models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CatatanKeperawatanRanapSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CatatanKeperawatanRanap model.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $jam, $no_rawat)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $jam, $no_rawat),
        ]);
    }

    /**
     * Creates a new CatatanKeperawatanRanap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CatatanKeperawatanRanap();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CatatanKeperawatanRanap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $jam, $no_rawat)
    {
        $model = $this->findModel($tanggal, $jam, $no_rawat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CatatanKeperawatanRanap model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $jam, $no_rawat)
    {
        $this->findModel($tanggal, $jam, $no_rawat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CatatanKeperawatanRanap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @return CatatanKeperawatanRanap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $jam, $no_rawat)
    {
        if (($model = CatatanKeperawatanRanap::findOne(['tanggal' => $tanggal, 'jam' => $jam, 'no_rawat' => $no_rawat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
