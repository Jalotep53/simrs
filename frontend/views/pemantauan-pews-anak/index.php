<?php

use frontend\models\PemantauanPewsAnak;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsAnakSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemantauan Pews Anaks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemantauan-pews-anak-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemantauan Pews Anak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'parameter_perilaku',
            'skor_perilaku',
            'parameter_crt_atau_warna_kulit',
            //'skor_crt_atau_warna_kulit',
            //'parameter_perespirasi',
            //'skor_perespirasi',
            //'skor_total',
            //'parameter_total',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemantauanPewsAnak $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
