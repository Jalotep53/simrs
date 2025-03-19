<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Returbeli $model */

$this->title = 'Update Returbeli: ' . $model->no_retur_beli;
$this->params['breadcrumbs'][] = ['label' => 'Returbelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_retur_beli, 'url' => ['view', 'no_retur_beli' => $model->no_retur_beli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="returbeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
