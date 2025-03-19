<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarRawatInapDr $model */

$this->title = 'Create Bayar Rawat Inap Dr';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Rawat Inap Drs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-rawat-inap-dr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
