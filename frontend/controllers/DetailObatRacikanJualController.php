<?php

namespace frontend\controllers;

use frontend\models\DetailObatRacikanJual;
use frontend\models\DetailObatRacikanJualSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailObatRacikanJualController implements the CRUD actions for DetailObatRacikanJual model.
 */
class DetailObatRacikanJualController extends Controller
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
     * Lists all DetailObatRacikanJual models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DetailObatRacikanJualSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailObatRacikanJual model.
     * @param string $nota_jual Nota Jual
     * @param string $no_racik No Racik
     * @param string $kode_brng Kode Brng
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nota_jual, $no_racik, $kode_brng)
    {
        return $this->render('view', [
            'model' => $this->findModel($nota_jual, $no_racik, $kode_brng),
        ]);
    }

    /**
     * Creates a new DetailObatRacikanJual model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DetailObatRacikanJual();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailObatRacikanJual model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nota_jual Nota Jual
     * @param string $no_racik No Racik
     * @param string $kode_brng Kode Brng
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nota_jual, $no_racik, $kode_brng)
    {
        $model = $this->findModel($nota_jual, $no_racik, $kode_brng);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailObatRacikanJual model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nota_jual Nota Jual
     * @param string $no_racik No Racik
     * @param string $kode_brng Kode Brng
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nota_jual, $no_racik, $kode_brng)
    {
        $this->findModel($nota_jual, $no_racik, $kode_brng)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailObatRacikanJual model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nota_jual Nota Jual
     * @param string $no_racik No Racik
     * @param string $kode_brng Kode Brng
     * @return DetailObatRacikanJual the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nota_jual, $no_racik, $kode_brng)
    {
        if (($model = DetailObatRacikanJual::findOne(['nota_jual' => $nota_jual, 'no_racik' => $no_racik, 'kode_brng' => $kode_brng])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
