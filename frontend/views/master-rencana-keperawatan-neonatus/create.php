<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanNeonatus $model */

$this->title = 'Create Master Rencana Keperawatan Neonatus';
$this->params['breadcrumbs'][] = ['label' => 'Master Rencana Keperawatan Neonatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-rencana-keperawatan-neonatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
