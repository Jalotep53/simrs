<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseMacamKasus $model */

$this->title = 'Create Master Triase Macam Kasus';
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Macam Kasuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-macam-kasus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
