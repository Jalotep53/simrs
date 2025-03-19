<?php

namespace frontend\controllers;

use frontend\models\RiwayatNaikGaji;
use frontend\models\RiwayatNaikGajiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RiwayatNaikGajiController implements the CRUD actions for RiwayatNaikGaji model.
 */
class RiwayatNaikGajiController extends Controller
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
     * Lists all RiwayatNaikGaji models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RiwayatNaikGajiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RiwayatNaikGaji model.
     * @param int $id ID
     * @param string $pangkatjabatan Pangkatjabatan
     * @param float $gapok Gapok
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $pangkatjabatan, $gapok)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $pangkatjabatan, $gapok),
        ]);
    }

    /**
     * Creates a new RiwayatNaikGaji model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RiwayatNaikGaji();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'pangkatjabatan' => $model->pangkatjabatan, 'gapok' => $model->gapok]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RiwayatNaikGaji model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $pangkatjabatan Pangkatjabatan
     * @param float $gapok Gapok
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $pangkatjabatan, $gapok)
    {
        $model = $this->findModel($id, $pangkatjabatan, $gapok);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'pangkatjabatan' => $model->pangkatjabatan, 'gapok' => $model->gapok]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RiwayatNaikGaji model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $pangkatjabatan Pangkatjabatan
     * @param float $gapok Gapok
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $pangkatjabatan, $gapok)
    {
        $this->findModel($id, $pangkatjabatan, $gapok)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RiwayatNaikGaji model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $pangkatjabatan Pangkatjabatan
     * @param float $gapok Gapok
     * @return RiwayatNaikGaji the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $pangkatjabatan, $gapok)
    {
        if (($model = RiwayatNaikGaji::findOne(['id' => $id, 'pangkatjabatan' => $pangkatjabatan, 'gapok' => $gapok])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
