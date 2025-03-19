<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AturanPakai $model */

$this->title = 'Create Aturan Pakai';
$this->params['breadcrumbs'][] = ['label' => 'Aturan Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aturan-pakai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
