<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanInap $model */

$this->title = 'Create Jns Perawatan Inap';
$this->params['breadcrumbs'][] = ['label' => 'Jns Perawatan Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jns-perawatan-inap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
