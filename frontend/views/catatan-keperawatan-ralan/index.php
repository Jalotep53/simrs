<?php

use frontend\models\CatatanKeperawatanRalan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanKeperawatanRalanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Catatan Keperawatan Ralans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-keperawatan-ralan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Catatan Keperawatan Ralan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'jam',
            'no_rawat',
            'uraian',
            'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CatatanKeperawatanRalan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
