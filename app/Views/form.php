<div class="container mt-5">
    <?php echo form_open('/user/store') ?>
        <div class="form-group">
            <?= csrf_field() ?>

            <!-- <?= form_label('Nome', 'name') ?> -->
            <!-- <?= form_input(['name'=>'name', 'type' => 'text', 'id'=>'name', 'class'=>'form-control', 'value' => set_value('name', '')]) ?> -->
            
            <label for="username">Nome: </label>
            <input 
            type="text" 
            name="username" 
            id="username" 
            class="form-control" 
            value="<?php echo isset($user['name']) ? $user['name'] : '' ?>" 
            required>
        </div>
        <div class="form-group">
        <?= form_label('Email', 'email') ?>
            <!-- <label for="useremail">Email: </label> -->
            <input type="email" name="useremail" id="useremail" class="form-control" value="<?php echo isset($user['email']) ? $user['email'] : '' ?>" required>
        </div>
        <input type="submit" value="Salvar" class="btn btn-primary">
    <?php echo form_close() ?>
</div>