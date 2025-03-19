<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tamppiutang $model */

$this->title = 'Create Tamppiutang';
$this->params['breadcrumbs'][] = ['label' => 'Tamppiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tamppiutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
