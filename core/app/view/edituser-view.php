            <div class="container-fluid">
                <?php
$user = UserData::getById($_GET["id"]);
?>
                <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Editar Usuario</h4>
                    </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Editar Usuario</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Editar Usuario</h3>
                            <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                        <form role="form" method="post" action="./?action=updateuser" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <label>Imagen (480x480)</label>
                                        <input type="file" name="image">
                                        <?php if($user->image!=null): ?>
                                        <br>
                                <img src="storage/images/<?php echo $user->image;?>" class="img-responsive img-thumbnail" style="width:180px;">
                               <?php endif;?>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputNombre">Nombre</label>
                                            <input type="text" name="name" value="<?=$user->name;?>" class="form-control" id="name" placeholder="Ingrese su Nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="Inputlastname">Apellidos</label>
                                            <input type="text" name="lastname" value="<?=$user->lastname;?>" class="form-control" id="lastname" placeholder="Ingrese su Apellidos">
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="Inputusername">Nombre de Usuario</label>
                                            <input type="text" name="username" value="<?=$user->username;?>" class="form-control" id="Inputusername" placeholder="Ingrese su nombre de Usuario">
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="InputEmail">Correo</label>
                                            <input type="email" name="email" value="<?=$user->email;?>"" class="form-control" id="InputEmail" placeholder="Enter email">
                                        </div>                                          
                                        <div class="form-group">
                                            <label for="InputPassword">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            <p class="text-muted">Solo se modifica la contrase&ntilde;a si el campo no esta vacio.</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtipo">Tipo</label>                              
                                            <?php
                                            $cats = KindData::getAll();
                                            ?>
                                            <?php if(count($cats)>0):?>
                                            <select name="kind" class="form-control" required>
                                            <option value="">-- SELECCIONE TIPO --</option>
                                            <?php foreach($cats as $cat):?>
                                            <option value="<?=$cat->id;?>" <?php if($cat->id==$user->kind){echo "selected";}?>><?=$cat->name;?></option>
                                            <?php endforeach;?>
                                            </select>
                                            <?php endif;?>
                                        </div>

                                            <div class="form-check">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="status" class="custom-control-input" <?php if($user->status==1){echo "checked";}?>> Activo
                                                <span class="custom-control-indicator"></span>
                                                
                                            </label>
                                        </div>
                                        <input type="hidden" name="id" value="<?=$user->id;?>">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Actualizar</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->