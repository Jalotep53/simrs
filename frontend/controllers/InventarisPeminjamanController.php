<?php

namespace frontend\controllers;

use frontend\models\InventarisPeminjaman;
use frontend\models\InventarisPeminjamanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InventarisPeminjamanController implements the CRUD actions for InventarisPeminjaman model.
 */
class InventarisPeminjamanController extends Controller
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
     * Lists all InventarisPeminjaman models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InventarisPeminjamanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InventarisPeminjaman model.
     * @param string $peminjam Peminjam
     * @param string $no_inventaris No Inventaris
     * @param string $tgl_pinjam Tgl Pinjam
     * @param string $nip Nip
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($peminjam, $no_inventaris, $tgl_pinjam, $nip)
    {
        return $this->render('view', [
            'model' => $this->findModel($peminjam, $no_inventaris, $tgl_pinjam, $nip),
        ]);
    }

    /**
     * Creates a new InventarisPeminjaman model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InventarisPeminjaman();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'peminjam' => $model->peminjam, 'no_inventaris' => $model->no_inventaris, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InventarisPeminjaman model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $peminjam Peminjam
     * @param string $no_inventaris No Inventaris
     * @param string $tgl_pinjam Tgl Pinjam
     * @param string $nip Nip
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($peminjam, $no_inventaris, $tgl_pinjam, $nip)
    {
        $model = $this->findModel($peminjam, $no_inventaris, $tgl_pinjam, $nip);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'peminjam' => $model->peminjam, 'no_inventaris' => $model->no_inventaris, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InventarisPeminjaman model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $peminjam Peminjam
     * @param string $no_inventaris No Inventaris
     * @param string $tgl_pinjam Tgl Pinjam
     * @param string $nip Nip
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($peminjam, $no_inventaris, $tgl_pinjam, $nip)
    {
        $this->findModel($peminjam, $no_inventaris, $tgl_pinjam, $nip)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InventarisPeminjaman model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $peminjam Peminjam
     * @param string $no_inventaris No Inventaris
     * @param string $tgl_pinjam Tgl Pinjam
     * @param string $nip Nip
     * @return InventarisPeminjaman the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($peminjam, $no_inventaris, $tgl_pinjam, $nip)
    {
        if (($model = InventarisPeminjaman::findOne(['peminjam' => $peminjam, 'no_inventaris' => $no_inventaris, 'tgl_pinjam' => $tgl_pinjam, 'nip' => $nip])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
