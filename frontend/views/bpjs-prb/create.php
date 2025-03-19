<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BpjsPrb $model */

$this->title = 'Create Bpjs Prb';
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Prbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bpjs-prb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
