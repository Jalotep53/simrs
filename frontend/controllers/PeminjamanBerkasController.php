<?php

namespace frontend\controllers;

use frontend\models\PeminjamanBerkas;
use frontend\models\PeminjamanBerkasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PeminjamanBerkasController implements the CRUD actions for PeminjamanBerkas model.
 */
class PeminjamanBerkasController extends Controller
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
     * Lists all PeminjamanBerkas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PeminjamanBerkasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PeminjamanBerkas model.
     * @param string $peminjam Peminjam
     * @param string $id_ruang Id Ruang
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tgl_pinjam Tgl Pinjam
     * @param string $nip Nip
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($peminjam, $id_ruang, $no_rkm_medis, $tgl_pinjam, $nip)
    {
        return $this->render('view', [
            'model' => $this->findModel($peminjam, $id_ruang, $no_rkm_medis, $tgl_pinjam, $nip),
        ]);
    }

    /**
     * Creates a new PeminjamanBerkas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PeminjamanBerkas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'peminjam' => $model->peminjam, 'id_ruang' => $model->id_ruang, 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PeminjamanBerkas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $peminjam Peminjam
     * @param string $id_ruang Id Ruang
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tgl_pinjam Tgl Pinjam
     * @param string $nip Nip
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($peminjam, $id_ruang, $no_rkm_medis, $tgl_pinjam, $nip)
    {
        $model = $this->findModel($peminjam, $id_ruang, $no_rkm_medis, $tgl_pinjam, $nip);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'peminjam' => $model->peminjam, 'id_ruang' => $model->id_ruang, 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PeminjamanBerkas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $peminjam Peminjam
     * @param string $id_ruang Id Ruang
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tgl_pinjam Tgl Pinjam
     * @param string $nip Nip
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($peminjam, $id_ruang, $no_rkm_medis, $tgl_pinjam, $nip)
    {
        $this->findModel($peminjam, $id_ruang, $no_rkm_medis, $tgl_pinjam, $nip)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PeminjamanBerkas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $peminjam Peminjam
     * @param string $id_ruang Id Ruang
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tgl_pinjam Tgl Pinjam
     * @param string $nip Nip
     * @return PeminjamanBerkas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($peminjam, $id_ruang, $no_rkm_medis, $tgl_pinjam, $nip)
    {
        if (($model = PeminjamanBerkas::findOne(['peminjam' => $peminjam, 'id_ruang' => $id_ruang, 'no_rkm_medis' => $no_rkm_medis, 'tgl_pinjam' => $tgl_pinjam, 'nip' => $nip])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
