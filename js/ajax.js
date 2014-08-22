

function login_ajax(user, pass){
        var parametros = {

            "user" : user,
            "pass" : pass
        };
        $.ajax({
            data:  parametros,
            url:   './php/loggin_sesion.php',
            type:  'post',
            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success:  function (response) {
                //alert(response);
                //$("#resultado").html(response);
                if(response == "Sesion Exitosa"){
                	//alert("Bienvenido a STUAN");
                    apprise("Bienvenido a STUAN", {'animate':true}, function(r){
                        if(r==true){
                            window.location="index.php";
                        }
                    });
                	//window.location="index.php";
                }else{
                	//alert("Error al iniciar sesion, compruebe sus datos e intente de nuevo.");
                    apprise("Error al iniciar sesion, compruebe sus datos e intente de nuevo.");
                	$('#user').val("");
                	$('#pass').val("");
                }
            }
        });
}




function upload_ajax(title_album,date_album,desc_corta,desc_larga,archivo,portada){

    var files = archivo.files;
    var files1 = portada.files;
    var formData = new FormData();

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        formData.append('archivo[]', file, file.name);
    }
     for (var j = 0; j < files1.length; j++) {
        var file3 = files1[j];
        
        formData.append('portada', files1[j], file3.name);
    }
    


    formData.append('date_album',date_album);
    formData.append('title_album',title_album);
    formData.append('desc_corta',desc_corta);
    formData.append('desc_larga',desc_larga);
    //formData.append('portada',portada);

    if(title_album != "" && date_album != "" ){

    
        $.ajax({   
            data:  formData,
            url:   './php/upload.php',
            type:  'post',
            processData: false,
            contentType: false,
            beforeSend: function () {
                //$("#resultado").html("Procesando, espere por favor...");
                
            },
            success:  function (response) {
                //$("#resultado").html(response);
                //alert(response);
                var arr = response.charAt(0);
                if(arr == "¡"){
                    apprise(response +"\n¿Desea crear otro album?", {'verify':true}, function(r){
                        if(r){
                            reset($('#title_album'));
                            reset($('#date_album'));
                            reset($('#desc_corta'));
                            reset($('#desc_larga'));
                            reset($('#fotos_album'));
                            reset($('#portada_album'));
                        }else{
                            window.location.href="./modifica_album.php";
                        }
                    });
                }else{
                    apprise(response, {'animation':true}, function(r){
                    if(r){
                        /*reset($('#title_album'));
                        reset($('#date_album'));
                        reset($('#desc_corta'));
                        reset($('#desc_larga'));
                        reset($('#fotos_album'));
                        reset($('#portada_album'));*/
                    }else{
                        window.location.href="./modifica_album.php";
                    }
                  });
                }
                /*
                if (confirm(response +"\n¿Desea crear otro album?")) {
                    reset($('#title_album'));
                    reset($('#date_album'));
                    reset($('#desc_corta'));
                    reset($('#desc_larga'));
                    reset($('#fotos_album'));
                    reset($('#portada_album'));
                }else{
                    window.location.href="./modifica_album.php";
                }*/

            },
             error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                }  
        });
    }else{
        //alert("Verifica que los campos no se encuentre vacios, Y que la foto de portada no se incluya en las fotos del Album.");
        apprise("Verifica que los campos no se encuentre vacios, Y que la foto de portada no se incluya en las fotos del Album.");
  
    }
}



window.reset = function (e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
}




$(document).ready(function(){

    $(":input:first").focus();
    $('#title_album').focus();

    $('.span-close').click(function() {
        padre = $(this).parents('figure');
        hijo = $(this).children('input');
        hijo= hijo.val();
        
        /*if (confirm("Se eliminara la foto seleccionada, ¿Está seguro de continuar?")) {
             var parametros = {
                "id_foto" : hijo
            };*/
        apprise('Se eliminara la foto seleccionada, ¿Está seguro de continuar?', {'verify':true}, function(r){
            if(r){
                        // el usuairo ha clicado 'Yes'
                var parametros = {
                    "id_foto" : hijo
                }

                $.ajax({   
                    data:  parametros,
                    url:   './php/eliminar_foto.php',
                    type:  'post',
                    
                    beforeSend: function () {
                        //$("#resultado").html("Procesando, espere por favor...");    
                    },
                    success:  function (response) {
                        //$("#resultado").html(response);
                        //alert(response);
                        apprise(response);
                    },
                     error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        }  
                });


                padre.remove();
         //}//termina el confirm

            }else{
                    // el usuario ha clicado 'No'
                    
                }
        });


    });

////////////////////////////////////////////////////////////////////////////////////7
    $('#update_title').click(function() {
        var title = $("#title_album").val();
        var id = $("#input-update").val();

        var parametros = {
            "title" : title,
            "id": id
        };

        $.ajax({   
            data:  parametros,
            url:   './php/update_title.php',
            type:  'post',
            
            beforeSend: function () {
                //$("#resultado").html("Procesando, espere por favor...");    
            },
            success:  function (response) {
                //$("#resultado").html(response);
                //alert(response);
                apprise(response);

            },
             error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                }  
        });



    });

//////////////////////////////////////////////////////////////////////////////////77
    $('.span-close1').click(function() {
        padre = $(this).parents('figure');
        hijo = $(this).children('input');
        hijo= hijo.val();
        
        //if (confirm("Esta acción eliminará el Album seleccionado así como todas las fotos que le pertenecen, ¿Está seguro de continuar?")) {
        apprise("Esta acción eliminará el Album seleccionado así como todas las fotos que le pertenecen, ¿Está seguro de continuar?", {'verify':true}, function(r){
            if(r){ 

                 var parametros = {
                    "id_album" : hijo
                };

                $.ajax({   
                    data:  parametros,
                    url:   './php/eliminar_album.php',
                    type:  'post',
                    
                    beforeSend: function () {
                        //$("#resultado").html("Procesando, espere por favor...");    
                    },
                    success:  function (response) {
                        //$("#resultado").html(response);
                        //alert(response);
                        apprise(response);


                    },
                     error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        }  
                });


                 padre.remove();
             //}//termina el confirm
            }else{

        }  
        });

    });

    $('#select_princ').change(function(){
        var $selectedOption = $(this).find('option:selected');
        var selectedLabel = $selectedOption.text();
        var selectedValue = $selectedOption.val();

        var parametros = {
                "id_album" : selectedValue
            };

        if(selectedLabel != "--"){
            $.ajax({   
                data:  parametros,
                url:   './php/album_principal.php',
                type:  'post',
                
                beforeSend: function () {
                    //$("#resultado").html("Procesando, espere por favor...");    
                },
                success:  function (response) {
                    //$("#resultado").html(response);
                    //alert(response);
                    apprise(response);


                },
                 error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
            });
        }else{
            //alert('Este album no es correcto.');
            apprise('Este album no es correcto.');

        }
    }); 

    
    
    
}); 




function update_ajax(title_album,date_album,desc_corta,desc_larga,archivo,portada,id_album){

    var files = archivo.files;
    var files1 = portada.files;
    var formData = new FormData();

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        formData.append('archivo[]', file, file.name);
    }
     for (var j = 0; j < files1.length; j++) {
        var file3 = files1[j];
        
        formData.append('portada', files1[j], file3.name);
    }

    formData.append('date_album',date_album);
    formData.append('title_album',title_album);
    formData.append('desc_corta',desc_corta);
    formData.append('desc_larga',desc_larga);
    formData.append('id_album',id_album);
    //formData.append('portada',portada);

    if(title_album != "" && date_album != "" ){

    
        $.ajax({   
            data:  formData,
            url:   './php/update_album.php',
            type:  'post',
            processData: false,
            contentType: false,
            beforeSend: function () {
                //$("#resultado").html("Procesando, espere por favor...");
                
            },
            success:  function (response) {
                //$("#resultado").html(response);
                //alert(response);
                //apprise(response);
                //window.location.href = './modifica_album.php';
                apprise(response, {'animate':true}, function(r){
                    if(r==true){
                        window.location.href = './modifica_album.php';
                    }
                });
                //location.reload();
            },
             error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                }  
        });
    }else{
        //alert("Verifica que los campos no se encuentre vacios, Y que la foto de portada no se incluya en las fotos del Album.");
        apprise("Verifica que los campos no se encuentre vacios, Y que la foto de portada no se incluya en las fotos del Album.");
    
    }
}

