<div id="eys-nav-i">

<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3> 
<?php echo form_open('tipoevento/save_edit') ?>
    <ul>
        <li> <?php echo anchor('tipoevento/elprimero/', 'primero'); ?></li>
        <li> <?php echo anchor('tipoevento/anterior/'.$tipoevento['idtipoevento'], 'anterior'); ?></li>
        <li> <?php echo anchor('tipoevento/siguiente/'.$tipoevento['idtipoevento'], 'siguiente'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('tipoevento/elultimo/', 'Último'); ?></li>
        <li> <?php echo anchor('tipoevento/add', 'Nuevo'); ?></li>
        <li> <?php echo anchor('tipoevento/edit/'.$tipoevento['idtipoevento'],'Edit'); ?></li>
        <li style="border-right:1px solid green"> <?php echo anchor('tipoevento/Delete/'.$tipoevento['idtipoevento'],'Delete'); ?></li>
        <li> <?php echo anchor('tipoevento/listar/','Listar'); ?></li>

    </ul>
</div>
<br>


<?php echo form_hidden('idtipoevento',$tipoevento['idtipoevento']) ?>

<div class="form-group row">
    <label class="col-md-2 col-form-label"> Id:</label>
	<div class="col-md-10">

     <?php echo form_input('idtipoevento',$tipoevento['idtipoevento'],array("disabled"=>"disabled",'placeholder'=>'Idtipoevento')) ?>
 
	</div> 
</div> 
 
<div class="form-group row">
    <label class="col-md-2 col-form-label"> Nombre:</label>
    <div class="col-md-10">
        <?php echo form_input('nombre', $tipoevento['nombre'], array('placeholder' => 'Nombre del evento')); ?>
    </div> 
</div>