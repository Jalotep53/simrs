<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanGeriatri $model */

$this->title = 'Create Master Rencana Keperawatan Geriatri';
$this->params['breadcrumbs'][] = ['label' => 'Master Rencana Keperawatan Geriatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-rencana-keperawatan-geriatri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
