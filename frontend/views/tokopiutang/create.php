<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokopiutang $model */

$this->title = 'Create Tokopiutang';
$this->params['breadcrumbs'][] = ['label' => 'Tokopiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokopiutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
