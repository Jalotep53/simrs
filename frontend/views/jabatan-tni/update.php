<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JabatanTni $model */

$this->title = 'Update Jabatan Tni: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Tnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-tni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
