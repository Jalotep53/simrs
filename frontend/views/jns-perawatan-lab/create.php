<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanLab $model */

$this->title = 'Create Jns Perawatan Lab';
$this->params['breadcrumbs'][] = ['label' => 'Jns Perawatan Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jns-perawatan-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
