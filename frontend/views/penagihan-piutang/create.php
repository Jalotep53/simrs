<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenagihanPiutang $model */

$this->title = 'Create Penagihan Piutang';
$this->params['breadcrumbs'][] = ['label' => 'Penagihan Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penagihan-piutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
