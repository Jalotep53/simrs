<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailNotaJalan $model */

$this->title = 'Create Detail Nota Jalan';
$this->params['breadcrumbs'][] = ['label' => 'Detail Nota Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-nota-jalan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
