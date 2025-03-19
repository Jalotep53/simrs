<?php

use frontend\models\ResepLuarObat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarObatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Resep Luar Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-luar-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resep Luar Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_resep',
            'kode_brng',
            'jml',
            'aturan_pakai',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ResepLuarObat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_resep' => $model->no_resep, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
