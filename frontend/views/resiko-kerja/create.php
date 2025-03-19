<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResikoKerja $model */

$this->title = 'Create Resiko Kerja';
$this->params['breadcrumbs'][] = ['label' => 'Resiko Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resiko-kerja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
