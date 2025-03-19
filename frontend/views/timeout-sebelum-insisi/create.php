<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TimeoutSebelumInsisi $model */

$this->title = 'Create Timeout Sebelum Insisi';
$this->params['breadcrumbs'][] = ['label' => 'Timeout Sebelum Insisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timeout-sebelum-insisi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
