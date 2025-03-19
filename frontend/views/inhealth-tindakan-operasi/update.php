<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanOperasi $model */

$this->title = 'Update Inhealth Tindakan Operasi: ' . $model->kode_paket;
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Tindakan Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_paket, 'url' => ['view', 'kode_paket' => $model->kode_paket]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inhealth-tindakan-operasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
