<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SttsKerja $model */

$this->title = 'Create Stts Kerja';
$this->params['breadcrumbs'][] = ['label' => 'Stts Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stts-kerja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
