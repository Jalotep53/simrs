<?php

use frontend\models\SkpKategoriPenilaian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkpKategoriPenilaianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skp Kategori Penilaians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skp-kategori-penilaian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skp Kategori Penilaian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_kategori',
            'nama_kategori',
            'sasaran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkpKategoriPenilaian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_kategori' => $model->kode_kategori]);
                 }
            ],
        ],
    ]); ?>


</div>
