<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pessoa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pessoas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Familia'), ['controller' => 'Familia', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Familium'), ['controller' => 'Familia', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Edit Pessoa') ?></legend>
        <?php
            echo $this->Form->control('familia_id', ['options' => $familia]);
            echo $this->Form->control('nome_pessoa');
            echo $this->Form->control('sexo');
            echo $this->Form->control('cpf');
            echo $this->Form->control('rg');
            echo $this->Form->control('nascimento', ['empty' => true]);
            echo $this->Form->control('celular');
            echo $this->Form->control('celular2');
            echo $this->Form->control('email');
            echo $this->Form->control('profissao');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
