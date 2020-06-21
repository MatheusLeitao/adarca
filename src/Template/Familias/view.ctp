<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Familia $familia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Familia'), ['action' => 'edit', $familia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Familia'), ['action' => 'delete', $familia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $familia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Familias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Familia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="familias view large-9 medium-8 columns content">
    <h3><?= h($familia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Familia Nome') ?></th>
            <td><?= h($familia->familia_nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($familia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($familia->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($familia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($familia->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pessoas') ?></h4>
        <?php if (!empty($familia->pessoas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Nome Pessoa') ?></th>
                <th scope="col"><?= __('Sexo') ?></th>
                <th scope="col"><?= __('Cpf') ?></th>
                <th scope="col"><?= __('Rg') ?></th>
                <th scope="col"><?= __('Nascimento') ?></th>
                <th scope="col"><?= __('Celular') ?></th>
                <th scope="col"><?= __('Celular2') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Profissao') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($familia->pessoas as $pessoas): ?>
            <tr>
                <td><?= h($pessoas->id) ?></td>
                <td><?= h($pessoas->familia_id) ?></td>
                <td><?= h($pessoas->nome_pessoa) ?></td>
                <td><?= h($pessoas->sexo) ?></td>
                <td><?= h($pessoas->cpf) ?></td>
                <td><?= h($pessoas->rg) ?></td>
                <td><?= h($pessoas->nascimento) ?></td>
                <td><?= h($pessoas->celular) ?></td>
                <td><?= h($pessoas->celular2) ?></td>
                <td><?= h($pessoas->email) ?></td>
                <td><?= h($pessoas->profissao) ?></td>
                <td><?= h($pessoas->status) ?></td>
                <td><?= h($pessoas->created) ?></td>
                <td><?= h($pessoas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pessoas', 'action' => 'view', $pessoas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pessoas', 'action' => 'edit', $pessoas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pessoas', 'action' => 'delete', $pessoas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
