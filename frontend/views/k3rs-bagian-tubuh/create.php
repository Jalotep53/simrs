<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsBagianTubuh $model */

$this->title = 'Create K3rs Bagian Tubuh';
$this->params['breadcrumbs'][] = ['label' => 'K3rs Bagian Tubuhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-bagian-tubuh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
