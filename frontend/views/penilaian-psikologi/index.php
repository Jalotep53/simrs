<?php

use frontend\models\PenilaianPsikologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPsikologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Psikologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-psikologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Psikologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'nip',
            'anamnesis',
            'dikirim_dari',
            //'tujuan_pemeriksaan',
            //'ket_anamnesis:ntext',
            //'rupa',
            //'bentuk_tubuh',
            //'tindakan',
            //'pakaian',
            //'ekspresi',
            //'berbicara',
            //'penggunaan_kata',
            //'ciri_menyolok',
            //'hasil_psikotes:ntext',
            //'kepribadian:ntext',
            //'psikodinamika:ntext',
            //'kesimpulan_psikolog:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianPsikologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
