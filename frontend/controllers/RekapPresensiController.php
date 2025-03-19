<?php

namespace frontend\controllers;

use frontend\models\RekapPresensi;
use frontend\models\RekapPresensiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RekapPresensiController implements the CRUD actions for RekapPresensi model.
 */
class RekapPresensiController extends Controller
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
     * Lists all RekapPresensi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RekapPresensiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RekapPresensi model.
     * @param int $id ID
     * @param string $jam_datang Jam Datang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $jam_datang)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $jam_datang),
        ]);
    }

    /**
     * Creates a new RekapPresensi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RekapPresensi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'jam_datang' => $model->jam_datang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RekapPresensi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $jam_datang Jam Datang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $jam_datang)
    {
        $model = $this->findModel($id, $jam_datang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'jam_datang' => $model->jam_datang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RekapPresensi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $jam_datang Jam Datang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $jam_datang)
    {
        $this->findModel($id, $jam_datang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RekapPresensi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $jam_datang Jam Datang
     * @return RekapPresensi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $jam_datang)
    {
        if (($model = RekapPresensi::findOne(['id' => $id, 'jam_datang' => $jam_datang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
