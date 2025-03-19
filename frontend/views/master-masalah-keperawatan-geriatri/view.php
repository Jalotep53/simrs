<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanGeriatri $model */

$this->title = $model->kode_masalah;
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Keperawatan Geriatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-masalah-keperawatan-geriatri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_masalah' => $model->kode_masalah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_masalah' => $model->kode_masalah], [
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
            'kode_masalah',
            'nama_masalah',
        ],
    ]) ?>

</div>
