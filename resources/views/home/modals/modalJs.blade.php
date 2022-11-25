<script>
    var linkOpenProjectGames = $(".linkOpenProjectGames");
    var linkOpenProjectWeb = $(".linkOpenProjectWeb");

    linkOpenProjectGames.click(function (e) {
        var idGameProject = e.target.getAttribute("data-id");
        $.ajax({
            method: "GET",
            url: "{{env('URL_PROJECT')}}project/modals/:id".replace(":id", idGameProject)
        })
        .done( function (response) {
            var modalTitle = $(".modal-title");
            var pathImg = $("#pathImg");
            var descProject = $("#descProject");
            var urlProject = $("#urlProject");

            modalTitle.html(response.nameProject);
            pathImg.attr("src", "{{env('URL_PROJECT')}}"+response.pathImgProject);
            descProject.html(response.descProject);
            urlProject.attr("href", response.urlProject);
            urlProject.html(response.urlProject);
        })
        .fail(function(a, b, response){
            alert(response);
        });
    });


    linkOpenProjectWeb.click(function (e) {
        var idWebProject = e.target.getAttribute("data-id");
        $.ajax({
            method: "GET",
            url: "{{env('URL_PROJECT')}}project/modals/:id".replace(":id", idWebProject)
        })
        .done( function (response) {
            var modalTitle = $(".modal-title");
            var pathImg = $("#pathImg");
            var descProject = $("#descProject");
            var urlProject = $("#urlProject");

            modalTitle.html(response.nameProject);
            pathImg.html(response.pathImgProject);
            descProject.html(response.descProject);
            urlProject.attr("href", response.urlProject);
            urlProject.html(response.urlProject);
        })
        .fail(function(a, b, response){
            alert(response);
        });
    });

    console.log(linkOpenProjectGames);

</script>