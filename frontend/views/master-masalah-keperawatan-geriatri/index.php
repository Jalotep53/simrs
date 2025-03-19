<?php

use frontend\models\MasterMasalahKeperawatanGeriatri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanGeriatriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Masalah Keperawatan Geriatris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-masalah-keperawatan-geriatri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Masalah Keperawatan Geriatri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_masalah',
            'nama_masalah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterMasalahKeperawatanGeriatri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_masalah' => $model->kode_masalah]);
                 }
            ],
        ],
    ]); ?>


</div>
