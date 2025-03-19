<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Dapurpengeluaran $model */

$this->title = $model->no_keluar;
$this->params['breadcrumbs'][] = ['label' => 'Dapurpengeluarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dapurpengeluaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_keluar' => $model->no_keluar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_keluar' => $model->no_keluar], [
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
            'no_keluar',
            'tanggal',
            'nip',
            'keterangan',
        ],
    ]) ?>

</div>
