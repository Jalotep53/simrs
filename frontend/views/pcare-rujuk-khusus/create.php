<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareRujukKhusus $model */

$this->title = 'Create Pcare Rujuk Khusus';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Rujuk Khususes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-rujuk-khusus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
