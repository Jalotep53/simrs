<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Rekeningtahun $model */

$this->title = 'Create Rekeningtahun';
$this->params['breadcrumbs'][] = ['label' => 'Rekeningtahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekeningtahun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
