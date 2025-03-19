<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBpdJateng $model */

$this->title = 'Update Tagihan Bpd Jateng: ' . $model->no_nota;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Bpd Jatengs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_nota, 'url' => ['view', 'no_nota' => $model->no_nota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagihan-bpd-jateng-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
