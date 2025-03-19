<?php

use frontend\models\SuratMasukKendali;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasukKendaliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Masuk Kendalis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-masuk-kendali-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Masuk Kendali', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_kendali',
            'kd_indeks',
            'no_urut',
            'tgl_selesai',
            'tgl_kembali',
            //'kepada',
            //'pengesahan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratMasukKendali $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_kendali' => $model->no_kendali]);
                 }
            ],
        ],
    ]); ?>


</div>
