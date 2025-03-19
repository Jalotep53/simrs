<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PencapaianKinerja $model */

$this->title = $model->kode_pencapaian;
$this->params['breadcrumbs'][] = ['label' => 'Pencapaian Kinerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pencapaian-kinerja-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_pencapaian' => $model->kode_pencapaian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_pencapaian' => $model->kode_pencapaian], [
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
            'kode_pencapaian',
            'nama_pencapaian',
            'indek',
        ],
    ]) ?>

</div>
