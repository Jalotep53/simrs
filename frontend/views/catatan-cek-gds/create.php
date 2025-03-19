<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanCekGds $model */

$this->title = 'Create Catatan Cek Gds';
$this->params['breadcrumbs'][] = ['label' => 'Catatan Cek Gds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-cek-gds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
