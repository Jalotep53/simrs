<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanEwsNeonatus $model */

$this->title = 'Create Pemantauan Ews Neonatus';
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Ews Neonatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemantauan-ews-neonatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
