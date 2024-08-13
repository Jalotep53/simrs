<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\NotaJalan $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Nota Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nota-jalan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
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
            'no_rawat',
            'no_nota',
            'tanggal',
            'jam',
        ],
    ]) ?>

</div>
