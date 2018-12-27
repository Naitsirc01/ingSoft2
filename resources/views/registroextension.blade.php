@extends('layout.formlayout')
@section('content')

    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <div class="form-group" style="margin-top: 15px; font-size: 20px;">
                    <label>Registro de actividad de extensión.</label>

                </div>
                <!--<div class="col-xl" >
                    <h5>Registrar actividad de extensión:</h5>
                </div>
                <h5>Registro de actividad de extensión. </h5>-->
                <form class="" method="post" action="actividad_extension">
                    @csrf-field()


                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Titulo</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <!--<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>-->
                                <input type="text" class="form-control" name="name" id="name"  placeholder="Ingrese el titulo de la actividad"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Seleccione la actividad a registrar</label>
                        <select name="title" id="title" class="form-control">
                            <option value="Charla">Charla</option>
                            <option value="Curso">Curso</option>
                            <option value="Talleres">Talleres</option>
                            <option value="Seminario">Seminario</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputdate">Fecha en que se realizó</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>

                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Lugar</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <!--<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>   -->
                                <input type="text" class="form-control" name="username" id="username"  placeholder="Ingrese el lugar de la actividad"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Asistentes</label>
                        <div class="cols-sm-10">
                            <div class="input-group">

                                <input type="number" class="form-control" name="cantAsis" id="cantAsis"  placeholder="Ingrese la cantidad"/>
                            </div>
                        </div>



                        <!-- <div class="cols-sm-10">
                             <div class="input-group">

                                  <input type="password" class="form-control" name="password" id="password"  placeholder="Ingrese la cantidad de asistentes"/>
                              </div>
                          </div>-->
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Organizador de la actividad</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <!--<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>-->
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Ingrese el nombre del organizador"/>
                            </div>
                        </div>
                    </div>

                    <!--Subir pdf-->
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Subir lista de asistencia</label>
                                <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp">
                                    </span>
                                </span>
                                    <input id='urlname'type="text" class="form-control" readonly>
                                </div>
                                <button id="clear" class="btn btn-default">Clear</button>
                                <img id='img-upload'/>
                            </div>
                        </div>
                    </div>
                    <!--FIN Subir pdf-->


                    <!--cargar cositos-->
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Adjuntar imagenes</label>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Subir archivos</strong> <small> </small></div>
                                <div class="panel-body">
                                    <div class="input-group image-preview">
                                        <input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
                                        <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
						<!-- image-preview-clear button -->
						<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
                                            <!-- image-preview-input -->
						<div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
							<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
                            <!-- rename it -->
						</div>
						<button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
						</span> </div>
                                    <!-- /input-group image-preview [TO HERE]-->

                                    <br />

                                    <!-- Drop Zone -->
                                    <div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>
                                    <br />
                                    <!-- Progress Bar -->
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                                    </div>
                                    <br />

                                </div>
                            </div>
                        </div>



                    </div>
                    <!--FIN cargar cositos-->

                    <div class="form-group ">
                        <button   id="button" class="btn btn-primary btn-lg btn-block login-button">Registrar</button>
                    </div>

                </form>


            </div>
        </div>
    </div>

@endsection