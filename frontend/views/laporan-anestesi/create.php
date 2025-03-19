<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LaporanAnestesi $model */

$this->title = 'Create Laporan Anestesi';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-anestesi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
