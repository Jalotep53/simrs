<?php

use frontend\models\PasswordAsuransi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PasswordAsuransiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Password Asuransis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="password-asuransi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Password Asuransi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_pj',
            'usere',
            'passworde',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PasswordAsuransi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_pj' => $model->kd_pj]);
                 }
            ],
        ],
    ]); ?>


</div>
