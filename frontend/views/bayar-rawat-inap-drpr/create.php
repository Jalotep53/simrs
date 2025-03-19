<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarRawatInapDrpr $model */

$this->title = 'Create Bayar Rawat Inap Drpr';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Rawat Inap Drprs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-rawat-inap-drpr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
