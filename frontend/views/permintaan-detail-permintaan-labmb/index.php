<?php

use frontend\models\PermintaanDetailPermintaanLabmb;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanDetailPermintaanLabmbSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permintaan Detail Permintaan Labmbs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-detail-permintaan-labmb-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permintaan Detail Permintaan Labmb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'noorder',
            'kd_jenis_prw',
            'id_template',
            'stts_bayar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PermintaanDetailPermintaanLabmb $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template]);
                 }
            ],
        ],
    ]); ?>


</div>
