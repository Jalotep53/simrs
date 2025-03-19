<?php

use frontend\models\TelaahFarmasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TelaahFarmasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Telaah Farmasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telaah-farmasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Telaah Farmasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_resep',
            'resep_identifikasi_pasien',
            'resep_ket_identifikasi_pasien',
            'resep_tepat_obat',
            'resep_ket_tepat_obat',
            //'resep_tepat_dosis',
            //'resep_ket_tepat_dosis',
            //'resep_tepat_cara_pemberian',
            //'resep_ket_tepat_cara_pemberian',
            //'resep_tepat_waktu_pemberian',
            //'resep_ket_tepat_waktu_pemberian',
            //'resep_ada_tidak_duplikasi_obat',
            //'resep_ket_ada_tidak_duplikasi_obat',
            //'resep_interaksi_obat',
            //'resep_ket_interaksi_obat',
            //'resep_kontra_indikasi_obat',
            //'resep_ket_kontra_indikasi_obat',
            //'obat_tepat_pasien',
            //'obat_tepat_obat',
            //'obat_tepat_dosis',
            //'obat_tepat_cara_pemberian',
            //'obat_tepat_waktu_pemberian',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TelaahFarmasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_resep' => $model->no_resep]);
                 }
            ],
        ],
    ]); ?>


</div>
