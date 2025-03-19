<?php

use frontend\models\PenilaianMcu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMcuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Mcus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-mcu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Mcu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kd_dokter',
            'informasi',
            'rps',
            //'rpk',
            //'rpd',
            //'alergi',
            //'keadaan',
            //'kesadaran',
            //'td',
            //'nadi',
            //'rr',
            //'tb',
            //'bb',
            //'suhu',
            //'submandibula',
            //'axilla',
            //'supraklavikula',
            //'leher',
            //'inguinal',
            //'oedema',
            //'sinus_frontalis',
            //'sinus_maxilaris',
            //'palpebra',
            //'sklera',
            //'cornea',
            //'buta_warna',
            //'konjungtiva',
            //'lensa',
            //'pupil',
            //'lubang_telinga',
            //'daun_telinga',
            //'selaput_pendengaran',
            //'proc_mastoideus',
            //'septum_nasi',
            //'lubang_hidung',
            //'bibir',
            //'caries',
            //'lidah',
            //'faring',
            //'tonsil',
            //'kelenjar_limfe',
            //'kelenjar_gondok',
            //'gerakan_dada',
            //'vocal_femitus',
            //'perkusi_dada',
            //'bunyi_napas',
            //'bunyi_tambahan',
            //'ictus_cordis',
            //'bunyi_jantung',
            //'batas',
            //'inspeksi',
            //'palpasi',
            //'hepar',
            //'perkusi_abdomen',
            //'auskultasi',
            //'limpa',
            //'costovertebral',
            //'kondisi_kulit',
            //'ekstrimitas_atas',
            //'ekstrimitas_atas_ket',
            //'ekstrimitas_bawah',
            //'ekstrimitas_bawah_ket',
            //'laborat:ntext',
            //'radiologi:ntext',
            //'ekg:ntext',
            //'spirometri:ntext',
            //'audiometri:ntext',
            //'treadmill:ntext',
            //'lainlain:ntext',
            //'merokok',
            //'alkohol',
            //'kesimpulan:ntext',
            //'anjuran:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMcu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
