/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function inicioSesion(){
            bootbox.dialog({
                title: "Iniciar Sesion",
                message: '<div class="row">  ' +
                    '<div class="col-md-12"> ' +
                    '<form class="form-horizontal"> ' +
                    '<div class="col-md-10"> ' +
                    '<div class="form-group"> ' +
                    '<label class="col-md-4 control-label" for="name">Nombre de usuario</label> ' +

                    '<input id="name" name="name" type="text" placeholder="Your name" class="form-control input-md"> ' +
                    '<label class="col-md-4 control-label" for="name">Contraseña</label> ' +

                    '<input id="name" name="name" type="text" placeholder="Your name" class="form-control input-md"> ' +
                    '</div> ' +
                    '</form> </div>  </div>',
                buttons: {
                    success: {
                        label: "Cancelar",
                        className: "btn-danger",
                    },
                    cancel: {
                        label: "Iniciar Sesion",
                        className: "btn-success",
                    }
                }
            }
        );


};


