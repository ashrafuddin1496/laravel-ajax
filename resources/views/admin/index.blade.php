<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Laravel Ajaxify</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/datatables.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>



	<div class="wrap-table ">
        <a class="btn btn-primary btn-sm" data-toggle="modal" href="#add_student_modal">Add New Student</a>
        <br>
        <br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped" id="myTable">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Roll</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="student_tbody">
                    @foreach($all_data as $d)
                        <tr>
                            <td>{{$loop ->index+1}}</td>
                            <td>{{$d ->name}}</td>
                            <td>{{$d ->roll}}</td>
                            <td>{{$d ->email}}</td>
                            <td>{{$d ->cell}}</td>
                            <td><img src="media/students/{{$d ->photo}}" alt=""></td>
                            <td>
                                <a class="btn btn-sm btn-info" href="#">View</a>
                                <a class="btn btn-sm btn-warning" data-toggle="modal" href="#edit_student_modal">Edit</a>
                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                    @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>

{{--Add New Student Modal--}}
    <div id="add_student_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Add New Student</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="mess"></div>
                    <form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Cell</label>
                            <input name="cell" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Roll</label>
                            <input name="roll" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <img id="student_photo_preview"  src=""  alt="">
                            <input name="photo" style="display: none;" class="form-control" type="file" id="student_photo">
                            <label style="font-size: 20px;cursor: pointer" for="student_photo"><i class="fa fa-camera"></i>
                            </label>

                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Add">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

{{--Edit Student Modal--}}
    <div id="edit_student_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Add New Student</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="mess"></div>
                    <form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Cell</label>
                            <input name="cell" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Roll</label>
                            <input name="roll" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <img id="student_photo_preview"  src=""  alt="">
                            <input name="photo" style="display: none;" class="form-control" type="file" id="student_photo">
                            <label style="font-size: 20px;cursor: pointer" for="student_photo"><i class="fa fa-camera"></i>
                            </label>

                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Add">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>






	<!-- JS FILES  -->
	<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{'assets/js/bootstrap.min.js'}}"></script>
	<script src="{{'assets/js/datatables.min.js'}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
