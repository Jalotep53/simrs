<?php

use frontend\models\MasterAturanPakai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterAturanPakaiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Aturan Pakais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-aturan-pakai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Aturan Pakai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aturan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterAturanPakai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'aturan' => $model->aturan]);
                 }
            ],
        ],
    ]); ?>


</div>
