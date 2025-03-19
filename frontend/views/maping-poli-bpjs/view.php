<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MapingPoliBpjs $model */

$this->title = $model->kd_poli_rs;
$this->params['breadcrumbs'][] = ['label' => 'Maping Poli Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="maping-poli-bpjs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_poli_rs' => $model->kd_poli_rs], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_poli_rs' => $model->kd_poli_rs], [
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
            'kd_poli_rs',
            'kd_poli_bpjs',
            'nm_poli_bpjs',
        ],
    ]) ?>

</div>
