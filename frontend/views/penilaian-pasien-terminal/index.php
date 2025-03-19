<?php

use frontend\models\PenilaianPasienTerminal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienTerminalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Pasien Terminals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pasien-terminal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Pasien Terminal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'diagnosa',
            'rps',
            'rpd',
            //'keadaan_umum',
            //'kesadaran',
            //'td',
            //'nadi',
            //'suhu',
            //'rr',
            //'spo2',
            //'skala_nyeri',
            //'tahap_pasien_menjelang_ajal',
            //'tanda_klinis_menjelang_kematian',
            //'kebutuhan_spiritual_pasien',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianPasienTerminal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
