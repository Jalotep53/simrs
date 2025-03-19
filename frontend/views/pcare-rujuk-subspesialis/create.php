<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareRujukSubspesialis $model */

$this->title = 'Create Pcare Rujuk Subspesialis';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Rujuk Subspesialis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-rujuk-subspesialis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
