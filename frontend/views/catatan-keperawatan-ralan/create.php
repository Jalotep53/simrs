<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanKeperawatanRalan $model */

$this->title = 'Create Catatan Keperawatan Ralan';
$this->params['breadcrumbs'][] = ['label' => 'Catatan Keperawatan Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-keperawatan-ralan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
