<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RawatInapDr $model */

$this->title = 'Create Rawat Inap Dr';
$this->params['breadcrumbs'][] = ['label' => 'Rawat Inap Drs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-inap-dr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
