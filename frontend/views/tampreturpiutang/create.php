<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturpiutang $model */

$this->title = 'Create Tampreturpiutang';
$this->params['breadcrumbs'][] = ['label' => 'Tampreturpiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampreturpiutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
