function listadoComunas(_idRegion) {
    var data = {
        _idRegion: _idRegion
    };
    $.ajax({
        method: "POST",
        url: "/formDenuncia/NuevaDenuncia.aspx/Comunas",
        data: JSON.stringify(data),
        contentType: "application/json; charset=utf-8",
        dataType: "json"
    }).done(function (objReturn) {
        //var ddl = $("#ddlRegion");
        var ddl = document.getElementById("ddlComuna");
        ddl.options.length = 0;
        var opt1 = document.createElement("option");
        opt1.text = "Seleccionar Comuna";
        opt1.value = 0;
        ddl.options.add(opt1);
        $(objReturn.d.data).each(function (index, obj) {
            var opt = document.createElement("option");
            opt.text = obj.detalle;
            opt.value = obj.id;
            ddl.options.add(opt);
        });
        ddl.selectedIndex = 0;
    }).fail(function (xhr, ajaxOptions, thrownError) {
        $("#divError").html("<span>Error: " + xhr.status + " --/-- " + thrownError + "</span>");
    })
}