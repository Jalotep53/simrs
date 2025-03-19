<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dapuropname $model */

$this->title = 'Update Dapuropname: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Dapuropnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dapuropname-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
