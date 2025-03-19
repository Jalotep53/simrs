<?php

use frontend\models\BuktiPerencanaanPemulanganSaksikeluarga;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPerencanaanPemulanganSaksikeluargaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bukti Perencanaan Pemulangan Saksikeluargas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-perencanaan-pemulangan-saksikeluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bukti Perencanaan Pemulangan Saksikeluarga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BuktiPerencanaanPemulanganSaksikeluarga $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
