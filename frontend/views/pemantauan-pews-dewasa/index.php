<?php

use frontend\models\PemantauanPewsDewasa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsDewasaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemantauan Pews Dewasas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemantauan-pews-dewasa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemantauan Pews Dewasa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'parameter_laju_respirasi',
            'skor_laju_respirasi',
            'parameter_saturasi_oksigen',
            //'skor_saturasi_oksigen',
            //'parameter_suplemen_oksigen',
            //'skor_suplemen_oksigen',
            //'parameter_tekanan_darah_sistolik',
            //'skor_tekanan_darah_sistolik',
            //'parameter_laju_jantung',
            //'skor_laju_jantung',
            //'parameter_kesadaran',
            //'skor_kesadaran',
            //'parameter_temperatur',
            //'skor_temperatur',
            //'skor_total',
            //'parameter_total',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemantauanPewsDewasa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
