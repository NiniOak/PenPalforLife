$( document ).ready(function() {
    $('#insert').click(function(evevnt){
        event.preventDefault();
        $.ajax({
        url:"languages.php",
        method: "post",
        data: $('form').serialize(),
        dataType: "text",
        success: function(strLanguages) {
            $('#language').text(strLanguages)
            }
        })
    })
    
});