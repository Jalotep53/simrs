<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunMandiri $model */

$this->title = $model->kd_rek;
$this->params['breadcrumbs'][] = ['label' => 'Set Akun Mandiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-akun-mandiri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_rek' => $model->kd_rek], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_rek' => $model->kd_rek], [
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
            'kd_rek',
            'kd_rek_biaya',
            'username',
            'password',
            'client_id',
            'client_secret',
            'kode_rs',
            'kode_mcm',
            'no_rekening',
        ],
    ]) ?>

</div>
