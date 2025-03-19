<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tokoreturjual $model */

$this->title = $model->no_retur_jual;
$this->params['breadcrumbs'][] = ['label' => 'Tokoreturjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tokoreturjual-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_retur_jual' => $model->no_retur_jual], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_retur_jual' => $model->no_retur_jual], [
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
            'no_retur_jual',
            'tgl_retur',
            'nip',
            'no_member',
            'catatan',
            'total',
        ],
    ]) ?>

</div>
