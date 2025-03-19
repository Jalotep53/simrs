<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanGigi $model */

$this->title = 'Create Master Rencana Keperawatan Gigi';
$this->params['breadcrumbs'][] = ['label' => 'Master Rencana Keperawatan Gigis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-rencana-keperawatan-gigi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
