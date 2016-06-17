/**
 * 
 * @param {type} url
 * @param {type} formulario
 * @returns {void}
 */
function enviarFormulario(url, formulario)
{
    var data = new FormData($(formulario)[0]);
    
    $.ajax({
        url: url,
        data: data,
        type: 'POST',
        processData: false,
        contentType: false,
        success: function(data)
        {
            
        }
    });
}