<?php

namespace frontend\controllers;

use frontend\models\Propinsi;
use frontend\models\PropinsiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PropinsiController implements the CRUD actions for Propinsi model.
 */
class PropinsiController extends Controller
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
     * Lists all Propinsi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PropinsiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Propinsi model.
     * @param int $kd_prop Kd Prop
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_prop)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_prop),
        ]);
    }

    /**
     * Creates a new Propinsi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Propinsi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_prop' => $model->kd_prop]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Propinsi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $kd_prop Kd Prop
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_prop)
    {
        $model = $this->findModel($kd_prop);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_prop' => $model->kd_prop]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Propinsi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $kd_prop Kd Prop
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_prop)
    {
        $this->findModel($kd_prop)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Propinsi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $kd_prop Kd Prop
     * @return Propinsi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_prop)
    {
        if (($model = Propinsi::findOne(['kd_prop' => $kd_prop])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
