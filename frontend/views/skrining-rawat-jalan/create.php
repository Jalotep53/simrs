<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningRawatJalan $model */

$this->title = 'Create Skrining Rawat Jalan';
$this->params['breadcrumbs'][] = ['label' => 'Skrining Rawat Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skrining-rawat-jalan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
