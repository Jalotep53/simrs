<?php

namespace frontend\controllers;

use frontend\models\JasaLain;
use frontend\models\JasaLainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JasaLainController implements the CRUD actions for JasaLain model.
 */
class JasaLainController extends Controller
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
     * Lists all JasaLain models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JasaLainSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JasaLain model.
     * @param string $thn Thn
     * @param int $bln Bln
     * @param int $id ID
     * @param float $bsr_jasa Bsr Jasa
     * @param string $ktg Ktg
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($thn, $bln, $id, $bsr_jasa, $ktg)
    {
        return $this->render('view', [
            'model' => $this->findModel($thn, $bln, $id, $bsr_jasa, $ktg),
        ]);
    }

    /**
     * Creates a new JasaLain model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new JasaLain();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'thn' => $model->thn, 'bln' => $model->bln, 'id' => $model->id, 'bsr_jasa' => $model->bsr_jasa, 'ktg' => $model->ktg]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JasaLain model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $thn Thn
     * @param int $bln Bln
     * @param int $id ID
     * @param float $bsr_jasa Bsr Jasa
     * @param string $ktg Ktg
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($thn, $bln, $id, $bsr_jasa, $ktg)
    {
        $model = $this->findModel($thn, $bln, $id, $bsr_jasa, $ktg);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'thn' => $model->thn, 'bln' => $model->bln, 'id' => $model->id, 'bsr_jasa' => $model->bsr_jasa, 'ktg' => $model->ktg]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JasaLain model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $thn Thn
     * @param int $bln Bln
     * @param int $id ID
     * @param float $bsr_jasa Bsr Jasa
     * @param string $ktg Ktg
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($thn, $bln, $id, $bsr_jasa, $ktg)
    {
        $this->findModel($thn, $bln, $id, $bsr_jasa, $ktg)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JasaLain model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $thn Thn
     * @param int $bln Bln
     * @param int $id ID
     * @param float $bsr_jasa Bsr Jasa
     * @param string $ktg Ktg
     * @return JasaLain the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($thn, $bln, $id, $bsr_jasa, $ktg)
    {
        if (($model = JasaLain::findOne(['thn' => $thn, 'bln' => $bln, 'id' => $id, 'bsr_jasa' => $bsr_jasa, 'ktg' => $ktg])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
