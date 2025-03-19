<?php

use frontend\models\K3rsPenyebab;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsPenyebabSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'K3rs Penyebabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-penyebab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create K3rs Penyebab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_penyebab',
            'penyebab_kecelakaan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, K3rsPenyebab $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_penyebab' => $model->kode_penyebab]);
                 }
            ],
        ],
    ]); ?>


</div>
