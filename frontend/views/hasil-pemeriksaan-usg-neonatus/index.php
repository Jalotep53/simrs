<?php

use frontend\models\HasilPemeriksaanUsgNeonatus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgNeonatusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hasil Pemeriksaan Usg Neonatuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-usg-neonatus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasil Pemeriksaan Usg Neonatus', ['create'], ['class' => 'btn btn-success']) ?>
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
            'diagnosa_klinis',
            'kiriman_dari',
            //'ventrikal_sinistra',
            //'ventrikal_dextra',
            //'kesan',
            //'kesimpulan',
            //'saran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HasilPemeriksaanUsgNeonatus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
