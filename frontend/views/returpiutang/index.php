<?php

use frontend\models\Returpiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ReturpiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Returpiutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="returpiutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Returpiutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_retur_piutang',
            'tgl_retur',
            'nip',
            'no_rkm_medis',
            'kd_bangsal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Returpiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_retur_piutang' => $model->no_retur_piutang]);
                 }
            ],
        ],
    ]); ?>


</div>
