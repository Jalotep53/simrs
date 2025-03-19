<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilTindakanEswl $model */

$this->title = 'Update Hasil Tindakan Eswl: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Tindakan Eswls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'mulai' => $model->mulai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-tindakan-eswl-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
