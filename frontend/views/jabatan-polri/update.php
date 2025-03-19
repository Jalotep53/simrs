<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JabatanPolri $model */

$this->title = 'Update Jabatan Polri: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-polri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
