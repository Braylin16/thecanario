function tiempoReal()
    {
        var tabla = $.ajax({
            url:'https://thecanario.com/post',
            dataType:'text',
            async:false
        }).responseText;

        // document.getElementById("formPost").innerHTML = tabla;
    }
setInterval(tiempoReal, 300000);