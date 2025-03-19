<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RawatInapDrpr $model */

$this->title = 'Create Rawat Inap Drpr';
$this->params['breadcrumbs'][] = ['label' => 'Rawat Inap Drprs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-inap-drpr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
