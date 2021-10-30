<div id="content" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý nhân viên</li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Employee table</h3>

                            <button type="button" onclick="openModalEmployee('')" href="#"
                                class="btn btn-primary btn-sm float-right" role="button" data-toggle="modal"
                                data-target="#AddModal">Add</button>

                            <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1"
                                role="button" data-toggle="modal" data-target="#">Import</button>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="authortable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Birth</th>
                                        <th>Auth</th>
                                        <th>Join Date</th>
                                        <th>#</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //print_r($data['Author']);
                                    foreach($data['Employee'] as $row){
        
                                    ?>
                                    <tr>
                                        <td><?=$row['id']?></td>
                                        <td><?=$row['name']?></td>
                                        <td><?=$row['phone']?></td>
                                        <td><?=$row['address']?></td>
                                        <td><?=$row['email']?></td>
                                        <td><?=$row['birth']?></td>
                                        <td><?=$row['auth']?></td>
                                        <td><?=$row['joindate']?></td>
                                        <td><a onclick='openModalEmployee(<?php echo json_encode($row)?>)' href="#"
                                                class="btn btn-warning btn-sm" role="button" data-toggle="modal"
                                                data-target="#UpdateModal">Update</a>
                                            <a onclick='openModalEmployee(<?php echo json_encode($row)?>)' href="#"
                                                class="btn btn-danger btn-sm" role="button" data-toggle="modal"
                                                data-target="#DeleteModal">Delete</a>
                                        </td>

                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal" id="AddModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formAdd" action="" method="post">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Name</label>
                                <input name="txtName" type="text" class="form-control" id="txtName" placeholder="Enter "
                                    require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Phone</label>
                                <input name="txtPhone" type="text" class="form-control" id="txtName"
                                    placeholder="Enter " require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Address</label>
                                <input name="txtAddress" type="text" class="form-control" id="txtName"
                                    placeholder="Enter " require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Email</label>
                                <input name="txtEmail" type="email" class="form-control" id="txtName"
                                    placeholder="Enter " require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Birth</label>
                                <input name="txtBirth" type="date" class="form-control" id="txtName"
                                    placeholder="Enter " require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Auth</label>
                                <input name="txtAuth" type="number" class="form-control" id="txtName"
                                    placeholder="Enter " require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Join Date</label>
                                <input name="txtJoindate" type="date" class="form-control" id="txtName"
                                    placeholder="Enter " require>
                            </div>

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button id='addbtn' name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal" id="DeleteModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Delete</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formDelete" action="" method="POST">

                        <div class="card-body">
                            <div class="form-check">
                                <input name="checkDelete" id="checkDelete" type="checkbox" class="form-check-input">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal" id="UpdateModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formUpdate" action="" method="POST">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Name</label>
                                <input name="txtName" type="text" class="form-control" id="txtName"
                                    placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Phone</label>
                                <input name="txtPhone" type="text" class="form-control" id="txtName"
                                    placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Address</label>
                                <input name="txtAddress" type="text" class="form-control" id="txtName"
                                    placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Email</label>
                                <input name="txtEmail" type="email" class="form-control" id="txtName"
                                    placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Birth</label>
                                <input name="txtBirth" type="date" class="form-control" id="txtName"
                                    placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Auth</label>
                                <input name="txtAuth" type="number" class="form-control" id="txtName"
                                    placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Join Date</label>
                                <input name="txtJoindate" type="date" class="form-control" id="txtName"
                                    placeholder="Enter ">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function openModalEmployee(e) {
        $getCurrentUrl = 'http://localhost/Bookstore/<?=$data['
        Page ']?>';

        //update model
        const x = document.forms["formUpdate"];
        x.elements[0].value = e.name;
        x.elements[1].value = e.phone;
        x.elements[2].value = e.address;
        x.elements[3].value = e.email;
        x.elements[4].value = e.birth;
        x.elements[5].value = e.auth;
        x.elements[6].value = e.joindate;

        //action
        $formUpdate = document.querySelector("#formUpdate");
        $formDelete = document.querySelector("#formDelete");
        $formAdd = document.querySelector("#formAdd");
        $formAdd.action = $getCurrentUrl + "/add";
        $formUpdate.action = $getCurrentUrl + "/update/" + e.id;
        $formDelete.action = $getCurrentUrl + "/delete/" + e.id;

    }
</script>