<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPenyakit $model */

$this->title = $model->kd_ktg;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Penyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kategori-penyakit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_ktg' => $model->kd_ktg], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_ktg' => $model->kd_ktg], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_ktg',
            'nm_kategori',
            'ciri_umum',
        ],
    ]) ?>

</div>
