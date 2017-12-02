            <div class="container-fluid">
                <?php
$data["posts"]=UserData::getAll();
?>
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Table</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data Table</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                   <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Export</h3>
                            <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                            <div class="table-responsive">
                                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Nombre de usuario</th>
                                            <th>Email</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <tr>
                                            <th>Nombre</th>
                                            <th>Nombre de usuario</th>
                                            <th>Email</th>
                                            <th></th>
                                        </tr>        
                                    </tfoot>
                                    <?php foreach($data["posts"] as $post):?>
                                        <tr>
                                            <td><?=$post->name;?></td>
                                            <td><?=$post->username;?></td>
                                            <td><?=$post->email;?></td>
                                            <td style="width:70px;">                                            
                                                <a href="./?view=edituser&id=<?=$post->id;?>" class="btn btn-warning waves-effect waves-light"> <i class="fa fa-pencil m-r-4"></i></a>
                                                <a href="./?action=deluser&id=<?=$post->id;?>" class="btn btn-danger waves-effect waves-light"><i class="fa fa-remove m-r-4"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->