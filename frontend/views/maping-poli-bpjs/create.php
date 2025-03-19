<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingPoliBpjs $model */

$this->title = 'Create Maping Poli Bpjs';
$this->params['breadcrumbs'][] = ['label' => 'Maping Poli Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-poli-bpjs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
