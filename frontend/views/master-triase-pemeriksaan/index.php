<?php

use frontend\models\MasterTriasePemeriksaan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriasePemeriksaanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Triase Pemeriksaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-pemeriksaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Triase Pemeriksaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_pemeriksaan',
            'nama_pemeriksaan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterTriasePemeriksaan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_pemeriksaan' => $model->kode_pemeriksaan]);
                 }
            ],
        ],
    ]); ?>


</div>
