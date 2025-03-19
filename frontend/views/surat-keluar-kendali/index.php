<?php

use frontend\models\SuratKeluarKendali;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarKendaliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Keluar Kendalis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keluar-kendali-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Keluar Kendali', ['create'], ['class' => 'btn btn-success']) ?>
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratKeluarKendali $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_kendali' => $model->no_kendali]);
                 }
            ],
        ],
    ]); ?>


</div>
