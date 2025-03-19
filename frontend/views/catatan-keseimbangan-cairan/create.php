<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanKeseimbanganCairan $model */

$this->title = 'Create Catatan Keseimbangan Cairan';
$this->params['breadcrumbs'][] = ['label' => 'Catatan Keseimbangan Cairans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-keseimbangan-cairan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
