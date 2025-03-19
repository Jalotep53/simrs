<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareRujukInternal $model */

$this->title = 'Create Pcare Rujuk Internal';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Rujuk Internals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-rujuk-internal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
