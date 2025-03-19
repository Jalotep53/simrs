<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Jurnal $model */

$this->title = $model->no_jurnal;
$this->params['breadcrumbs'][] = ['label' => 'Jurnals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jurnal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_jurnal' => $model->no_jurnal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_jurnal' => $model->no_jurnal], [
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
            'no_jurnal',
            'no_bukti',
            'tgl_jurnal',
            'jam_jurnal',
            'jenis',
            'keterangan',
        ],
    ]) ?>

</div>
