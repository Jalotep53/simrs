<?php

use frontend\models\Setting;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SettingSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Setting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_instansi',
            'alamat_instansi',
            'kabupaten',
            'propinsi',
            'kontak',
            //'email:email',
            //'aktifkan',
            //'kode_ppk',
            //'kode_ppkinhealth',
            //'kode_ppkkemenkes',
            //'wallpaper',
            //'logo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Setting $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nama_instansi' => $model->nama_instansi]);
                 }
            ],
        ],
    ]); ?>


</div>
