<?php

use frontend\models\AuditPenangananDarah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPenangananDarahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Penanganan Darahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-penanganan-darah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Penanganan Darah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'id_ruang',
            'menggunakan_apd_waktu_membuang_darah',
            'komponen_darah_tidak_ada_dilantai',
            'membuang_darah_pada_tempat_ditentukan',
            //'pembersihan_areal_tumbahan_darah',
            //'apd_dibuang_di_limbah_infeksius',
            //'melakukan_kebersihan_tangan_setelah_prosedur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditPenangananDarah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
                 }
            ],
        ],
    ]); ?>


</div>
