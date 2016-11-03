
//MOSTRA PREVIA DE IMAGEM DO INPUT PRODUTOS
$( document ).ready(function() {

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_form').attr('src', e.target.result);

        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#filename").change(function(){
    readURL(this);
});

    
});
/////////////////////////////////////////////////

