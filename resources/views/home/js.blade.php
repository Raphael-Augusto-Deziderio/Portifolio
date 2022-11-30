<script>
    window.onload = function () {

    //Modal de Projetos
    const projectModal = new bootstrap.Modal('#projectModal');

    //Botao do Projeto
    var linkProject = $('#linkProject');

    //Botao de Games
    var buttonGames = document.getElementById("btnGames");


    //Botao de Web
    var buttonWeb = document.getElementById("btnWeb");

    var divContentLinkProjectsGames = $('.contentLinkProjectsGames');
    var divContentLinkProjectsWeb = $('.contentLinkProjectsWeb');


    var iscloseGames = true;
    var iscloseWeb = true;

    buttonGames.addEventListener("click", function () {
        buttonGames.classList.toggle("btn-selected");
        fillCard(buttonGames.id);
    });



    buttonWeb.addEventListener("click", function () {
        buttonWeb.classList.toggle("btn-selected");
        fillCard(buttonWeb.id);
    });


    function fillCard(id) {

        if (id == "btnGames" && iscloseGames == true) {
            divContentLinkProjectsGames.attr("style", "opacity:1");
            iscloseGames = false;
        } else if (id == "btnWeb" && iscloseWeb == true) {
            divContentLinkProjectsWeb.attr("style", "opacity:1");
            iscloseWeb = false;
        }  else if (id == "btnGames" && iscloseGames == false) {
            divContentLinkProjectsGames.attr("style", "opacity:0");
            // divContent.remove();
            iscloseGames = true;
        } else if (id == "btnWeb" && iscloseWeb == false) {
            divContentLinkProjectsWeb.attr("style", "opacity:0");
            // divContent.remove();
            iscloseWeb = true;
        }
    }
};


</script>