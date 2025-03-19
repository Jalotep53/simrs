<?php

use frontend\models\AuditPembuanganBendaTajam;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganBendaTajamSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Pembuangan Benda Tajams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-pembuangan-benda-tajam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Pembuangan Benda Tajam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'id_ruang',
            'setiap_injeksi_needle_langsung_dimasukkan_safety_box',
            'setiap_pemasangan_iv_canula_langsung_dimasukkan_safety_box',
            'setiap_benda_tajam_jarum_dimasukkan_safety_box',
            //'safety_box_tigaperempat_diganti',
            //'safety_box_keadaan_bersih',
            //'saftey_box_tertutup_setelah_digunakan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditPembuanganBendaTajam $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
                 }
            ],
        ],
    ]); ?>


</div>
