jQuery(document).ready(function($)
{

    var Options = [
        {refresh: "true",text:"Refrescar"},
        {add: "true",text:"Agregar"},
        {edit: "true",text:"Editar"},
        {'delete': "true",text:"Eliminar"}];

    var colheaders = [
        {index : "id", name: "id", editable: "true",  visible: "true", type: "text",placeholder:"", maxlength: "10", required: "false" },
        {index : "apellido", name: "Apellido",editable: "true", visible: "true", type: "text", maxlength: "10", required: "false" },
        {index : "nombre", name: "Nombre",editable: "true", visible: "true", type: "text", maxlength: "10", required: "true"},
        {index : "otro", name: "Otro",editable: "true", visible: "true", type: "text", maxlength: "10", required: "true"}];


    var edit_options ={	url: "edit.php",titulo: "Editar",method : "UPDATE" };
    var add_options ={ url: "crud/add.php",titulo: "Agregar",method : "POST" };
    var del_options ={ url: "del.php",titulo: "Eliminar",method : "POST"};

    var datasource ={
        url: "../templates/crud/list.php",
        method : "POST",
        datatype: "json",
        pagesize: 100,
        paginate: "false",
        fixedrows: "7"
    };


    var x = $('#table').Grid({  // calls the init method

        Titulo : 'Administrar Permisos',
        ABM: Options,
        Columnas: colheaders,
        edit_options : edit_options,
        add_options : add_options,
        del_options : del_options,
        timeout: 6000, /*Segundos de espera para llamados ajax edit, update, delete*/
        animate: 1,
        datasource: datasource,
        export2XLS: "true"
    });



});/**
 * Created by Ivan on 23/01/2017.
 */
