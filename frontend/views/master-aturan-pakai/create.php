<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterAturanPakai $model */

$this->title = 'Create Master Aturan Pakai';
$this->params['breadcrumbs'][] = ['label' => 'Master Aturan Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-aturan-pakai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
