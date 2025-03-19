<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerkiraanBiayaRanap $model */

$this->title = 'Create Perkiraan Biaya Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Perkiraan Biaya Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perkiraan-biaya-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
