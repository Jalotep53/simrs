<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObat $model */

$this->title = 'Create Rekonsiliasi Obat';
$this->params['breadcrumbs'][] = ['label' => 'Rekonsiliasi Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekonsiliasi-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
