<?php

use frontend\models\RekonsiliasiObat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rekonsiliasi Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekonsiliasi-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekonsiliasi Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rekonsiliasi',
            'no_rawat',
            'tanggal_wawancara',
            'rekonsiliasi_obat_saat',
            'alergi_obat',
            //'manifestasi_alergi',
            //'dampak_alergi',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RekonsiliasiObat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rekonsiliasi' => $model->no_rekonsiliasi]);
                 }
            ],
        ],
    ]); ?>


</div>
