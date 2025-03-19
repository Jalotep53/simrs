<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanOperasi $model */

$this->title = $model->kode_paket;
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Tindakan Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inhealth-tindakan-operasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_paket' => $model->kode_paket], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_paket' => $model->kode_paket], [
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
            'kode_paket',
            'kd_inhealth',
        ],
    ]) ?>

</div>
