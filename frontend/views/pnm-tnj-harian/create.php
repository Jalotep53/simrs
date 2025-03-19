<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PnmTnjHarian $model */

$this->title = 'Create Pnm Tnj Harian';
$this->params['breadcrumbs'][] = ['label' => 'Pnm Tnj Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pnm-tnj-harian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
