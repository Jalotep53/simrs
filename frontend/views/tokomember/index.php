<?php

use frontend\models\Tokomember;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TokomemberSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tokomembers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokomember-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tokomember', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_member',
            'nama',
            'jk',
            'tmp_lahir',
            'tgl_lahir',
            //'alamat',
            //'no_telp',
            //'email:email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tokomember $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_member' => $model->no_member]);
                 }
            ],
        ],
    ]); ?>


</div>
