<?php

use frontend\models\SuratPulangAtasPermintaanSendiri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPulangAtasPermintaanSendiriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Pulang Atas Permintaan Sendiris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pulang-atas-permintaan-sendiri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Pulang Atas Permintaan Sendiri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            'tgl_pulang',
            'rs_pilihan',
            'nama_pj',
            //'lahir',
            //'umur',
            //'jkpj',
            //'alamat',
            //'hubungan',
            //'saksi_keluarga',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratPulangAtasPermintaanSendiri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>
