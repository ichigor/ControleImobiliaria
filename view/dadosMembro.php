<?php
/**
 * Created by PhpStorm.
 * User: IgoR
 * Date: 17/10/2017
 * Time: 16:41
 */

require_once "../Controller/templateController.php";
$template = new templateController();
$template->template();
require_once "../DAO/membroDAO.php";

$idUsuario=$_GET['idUsuario'];
$dado = buscaMembro($conexao, $idUsuario);

?>

<div class="col-md-12">
    <h1>Dados do Membro</h1>
    <div class="box box-danger">

        <br><br>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="../Controller/membroController.php" method="POST">
            <input type="hidden" value="voltar" name="funcionalidade">
            <input type="hidden" value="<?= $dado['idUsuario'] ?>" name="idUsuario">
            <input type="hidden" value="<?= $dado['cpf'] ?>" name="cpf">
            <div class="box-body">
                <div class="form-group ">
                    <label for="cpf" class="col-sm-2 control-label">CPF</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="cpf" placeholder="CPF" disabled data-inputmask='"mask": "999.999.999-99"' data-mask value="<?=$dado['cpf'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nome" name="nome"  disabled placeholder="Nome Completo" value="<?=$dado['nome'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="usuario" class="col-sm-2 control-label">Usuario</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="usuario" name="usuario" disabled placeholder="Usuario para acessar o sistema" value="<?=$dado['usuario'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="rg" class="col-sm-2 control-label">RG</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="rg" name="rg" placeholder="RG" disabled value="<?=$dado['rg'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" disabled value="<?=$dado['email'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="celular" class="col-sm-2 control-label">Celular</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" disabled data-inputmask='"mask": "(99) 99999-9999"' data-mask value="<?=$dado['celular'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefone" class="col-sm-2 control-label">Telefone Fixo</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Telefone Fixo" name="telefone" disabled data-inputmask='"mask": "(999) 999-9999"' data-mask value="<?=$dado['telefone'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="endereco" class="col-sm-2 control-label">Endereço</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Endereço" name="endereco" disabled value="<?=$dado['endereco'] ?>">
                    </div>
                </div>


                <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                <div class="form-group">
                    <label for="funcao" class="col-sm-2 control-label">Função</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Tipo" name="tipo" disabled value="<?=$dado['tipo'] ?>">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="button" onclick="goBack()" class="btn btn-default">Voltar</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
</div>


<?php $template->templateF(); ?>
