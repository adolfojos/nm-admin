            <div class="container-fluid">
                <?php $data["posts"]=CampusData::getAll();
                
                 ?>
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Identificación del Plantel</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Identificación del Plantel</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Identificación del Plantel </h3>
                            <p class="text-muted m-b-30 font-13"> Inline editor</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <table style="clear: both" class="table table-bordered table-striped" id="user">
                                        <tbody>
                                            <?php foreach($data["posts"] as $post):?>
                                            <tr>
                                                <td width="35%">Nombre del Plantel</td>
                                                <td width="65%"><a href="#" id="name" data-type="text" data-pk="<?=$post->id;?>" data-title="Ingrese Nombre del Plantel"><?=$post->name;?></a></td>
                                            </tr>
                                            <tr>
                                                <td>Codigo del Plantel</td>
                                                <td>
                                                    <a href="#" id="code" data-type="text" data-pk="<?=$post->id;?>" data-title="Ingrese Codigo"><?=$post->code;?></a></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Zona Educativa</td>
                                                <td>
                                                    <a href="#" id="zone" data-type="text" data-pk="1" data-title="Ingrese la zona a la que pertenece el Plantel"><?=$post->zone;?></a></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dependencia</td>
                                                <td>
                                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username"><?=$post->dependence;?></a></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fecha de Fundacion</td>
                                                <td>
                                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username"><?=$post->birthdate;?></a></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dirrecion</td>
                                                <td>
                                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username"><?=$post->address;?></a></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dirrector Actual</td>
                                                <td>
                                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username"><?=$post->principal;?></a></td>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->