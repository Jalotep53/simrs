<?php

namespace frontend\controllers;

use frontend\models\RegPeriksa;
use frontend\models\RegPeriksaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use frontend\models\Poliklinik;
use frontend\models\Dokter;
use frontend\models\NotaJalan;
use frontend\models\Setting;
use wkhtmltox\PDF;
use frontend\models\Penjab;
use frontend\models\RawatJlDr;
use frontend\models\JnsPerawatan;
use frontend\models\KategoriPerawatan;
use Yii;
use kartik\alert\AlertBlock;
/**
 * RegPeriksaController implements the CRUD actions for RegPeriksa model.
 */
class RegPeriksaController extends Controller
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
     * Lists all RegPeriksa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RegPeriksaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $query = RegPeriksa::find()->where(['status_lanjut' => 'Ralan','tgl_registrasi'=>date("Y-m-d")]);
        
        $dataProvider2 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
            'pageSize' => 10,
        ],
        'sort' => [
            'defaultOrder' => [
                'created_at' => SORT_DESC,
                'title' => SORT_ASC, 
            ]
    ],
        ]);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProvider2' => $dataProvider2,
        ]);
    }
    public function actionRawatJalan()
    {
        $searchModel = new RegPeriksaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
$query = RegPeriksa::find()->where(['status_lanjut' => 'Ralan','tgl_registrasi'=>date("Y-m-d")]);
       
        $dataProvider2 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
            'pageSize' => 10,
        ],
            
        'sort' => [
            'defaultOrder' => [
                'no_reg' => SORT_ASC,
                
            ]
    ],
        ]);
        
        return $this->render('rawat-jalan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProvider2' => $dataProvider2,
        ]);
    }
    public function actionRawatInap()
    {
        $searchModel = new RegPeriksaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $query = RegPeriksa::find()
                ->leftJoin('kamar_inap','kamar_inap.no_rawat=reg_periksa.no_rawat')
                ->where(['status_lanjut' => 'ranap','kamar_inap.stts_pulang'=> '-']);
       
        $dataProvider2 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
            'pageSize' => 10,
        ],
            
        'sort' => [
            'defaultOrder' => [
                'no_reg' => SORT_ASC,
                
            ]
    ],
        ]);
        
        return $this->render('rawat-inap', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProvider2' => $dataProvider2,
        ]);
    }


    /**
     * Displays a single RegPeriksa model.
     * @param string $no_rawat No Rawat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat),
        ]);
    }

    /**
     * Creates a new RegPeriksa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RegPeriksa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RegPeriksa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat)
    {
        $model = $this->findModel($no_rawat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RegPeriksa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat)
    {
        $this->findModel($no_rawat)->delete();

        return $this->redirect(['index']);
    }
    public function actionCetakRajal($no_rawat){
    
        $searchModel = new RegPeriksaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
$query = RegPeriksa::find()->where(['status_lanjut' => 'Ralan','tgl_registrasi'=>date("Y-m-d")]);
       
        $dataProvider2 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
            'pageSize' => 10,
        ],
            
        'sort' => [
            'defaultOrder' => [
                'no_reg' => SORT_ASC,
                
            ]
    ],
        ]);
        
        
//        print $no_rawat;die;
        $reg = RegPeriksa::find()->where(['no_rawat'=>$no_rawat])->one();
        $nota= NotaJalan::find()->where(['no_rawat'=>$no_rawat])->one();
        
        if(empty($nota)){
            $message = "Billing belum di Klosing";
echo "<script type='text/javascript'>alert('$message');</script>";

return $this->render('rawat-jalan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProvider2' => $dataProvider2,
        ]);
        }else {
            
        }
        
        $poli = Poliklinik::find()->where(['kd_poli' => $reg->kd_poli])->one();
        $setting = Setting::find()->one();
        $penjab = Penjab::find()->where(['kd_pj' => $reg->kd_pj])->one();
        $pasien = \frontend\models\Pasien::find()->where(['no_rkm_medis' => $reg->no_rkm_medis])->one();
        $dokter = Dokter::find()->where(['kd_dokter' => $reg->kd_dokter])->one();
        $tindakan = RawatJlDr::find()->where(['no_rawat' => $reg->no_rawat])->all();
        
        return $this->render('cetak-rajal',[
            'setting'=>$setting,
            'nota' =>$nota,
            'poli' => $poli,
            'penjab' => $penjab,
            'reg' => $reg,
            'pasien' => $pasien,
            'dokter' => $dokter,
            'tindakan' => $tindakan,
        ]);
//        return Yii::$app->response->sendFile("../../file/Hal.docx", "test.txt", ['inline'=>false]);
    }
    public function actionAmbilKategoriPerawatan($no_rawat){
        $tindakan = RawatJlDr::find()->where(['no_rawat' => $no_rawat])->all();
        $kat = array();
        foreach ($tindakan as $arr){
            $jns = JnsPerawatan::find()->where(['kd_jenis_prw' => $arr->kd_jenis_prw])->one();
            $kategori =KategoriPerawatan::find()->where(['kd_kategori' => $jns->kd_kategori])->one();
            $kat[$kategori->kd_kategori] = $kategori->nm_kategori;
        }
        
        return json_encode(array_unique($kat));
    }
    /**
     * Finds the RegPeriksa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @return RegPeriksa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat)
    {
        if (($model = RegPeriksa::findOne(['no_rawat' => $no_rawat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
