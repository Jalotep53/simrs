<?php

use frontend\models\SkpKriteriaPenilaian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkpKriteriaPenilaianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skp Kriteria Penilaians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skp-kriteria-penilaian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skp Kriteria Penilaian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_kriteria',
            'nama_kriteria',
            'kode_kategori',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkpKriteriaPenilaian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_kriteria' => $model->kode_kriteria]);
                 }
            ],
        ],
    ]); ?>


</div>
