<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenatalaksanaanTerapiOkupasi $model */

$this->title = 'Create Penatalaksanaan Terapi Okupasi';
$this->params['breadcrumbs'][] = ['label' => 'Penatalaksanaan Terapi Okupasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penatalaksanaan-terapi-okupasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
