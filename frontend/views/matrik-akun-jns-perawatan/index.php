<?php

use frontend\models\MatrikAkunJnsPerawatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MatrikAkunJnsPerawatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Matrik Akun Jns Perawatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matrik-akun-jns-perawatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Matrik Akun Jns Perawatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_jenis_prw',
            'pendapatan_tindakan',
            'beban_jasa_dokter',
            'utang_jasa_dokter',
            'beban_jasa_paramedis',
            //'utang_jasa_paramedis',
            //'beban_kso',
            //'utang_kso',
            //'hpp_persediaan',
            //'persediaan_bhp',
            //'beban_jasa_sarana',
            //'utang_jasa_sarana',
            //'beban_menejemen',
            //'utang_menejemen',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MatrikAkunJnsPerawatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
