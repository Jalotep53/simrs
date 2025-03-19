<?php

use frontend\models\InhealthJenpelRuangRawat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthJenpelRuangRawatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inhealth Jenpel Ruang Rawats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-jenpel-ruang-rawat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inhealth Jenpel Ruang Rawat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_kamar',
            'kode_jenpel_ruang_rawat',
            'nama_jenpel_ruang_rawat',
            'tarif',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InhealthJenpelRuangRawat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_kamar' => $model->kd_kamar]);
                 }
            ],
        ],
    ]); ?>


</div>
