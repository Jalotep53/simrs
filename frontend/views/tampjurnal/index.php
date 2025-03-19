<?php

use frontend\models\Tampjurnal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TampjurnalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tampjurnals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampjurnal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tampjurnal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_rek',
            'nm_rek',
            'debet',
            'kredit',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tampjurnal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_rek' => $model->kd_rek]);
                 }
            ],
        ],
    ]); ?>


</div>
