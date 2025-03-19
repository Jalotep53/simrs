<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterImunisasi $model */

$this->title = 'Create Master Imunisasi';
$this->params['breadcrumbs'][] = ['label' => 'Master Imunisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-imunisasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
