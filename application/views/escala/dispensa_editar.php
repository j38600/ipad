<div class="container-fluid">
    <div class="row">
        <h3 class="text-center">Atualizar Indisponibilidade</h3>
        <?php
        if(validation_errors()){
        ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo validation_errors() ?>
            </div>
        <?php
        }
        echo form_open('escala/dispensa/edit/'.$id, ['class' => 'form-horizontal',
                                                    'role' => 'form']);
        echo form_hidden ('id',$id);?>
        <div class="form-group">
            <label for="razao_id" class="col-xs-offset-3 col-xs-2 control-label">Razão</label>
            <div class="col-xs-4">
            <?php 
            echo form_dropdown('razao_id',$razoes,$dispensa['razao_id'],'class="form-control"');?>
            </div>
        </div>
        <div class="form-group">
            <label for="gdh_inicio" class="col-xs-offset-3 col-xs-2 control-label">GDH de início</label>
            <div class="col-xs-4">
            <?php echo form_input([ 'name' => 'gdh_inicio',
                                    'id' => 'gdh_inicio',
                                    'type' => 'text',
                                    'value' => $dispensa['gdh_inicio'],
                                    'placeholder' => 'aaaa-mm-dd hh:ss',
                                    'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="gdh_fim" class="col-xs-offset-3 col-xs-2 control-label">GDH de fim</label>
            <div class="col-xs-4">
            <?php echo form_input([ 'name' => 'gdh_fim',
                                    'id' => 'gdh_fim',
                                    'type' => 'text',
                                    'value' => $dispensa['gdh_fim'],
                                    'placeholder' => 'aaaa-mm-dd hh:ss',
                                    'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="informacao" class="col-xs-offset-3 col-xs-2 control-label">Informação</label>
            <div class="col-xs-4">
            <?php echo form_input([ 'name' => 'informacao',
                                    'id' => 'informacao',
                                    'type' => 'text',
                                    'value' => $dispensa['informacao'],
                                    'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-5 col-xs-4">
                <button class="btn btn-primary" type="submit" name="submit">Atualizar</button>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>