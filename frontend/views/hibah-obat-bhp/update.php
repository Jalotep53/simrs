<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HibahObatBhp $model */

$this->title = 'Update Hibah Obat Bhp: ' . $model->no_hibah;
$this->params['breadcrumbs'][] = ['label' => 'Hibah Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_hibah, 'url' => ['view', 'no_hibah' => $model->no_hibah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hibah-obat-bhp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
