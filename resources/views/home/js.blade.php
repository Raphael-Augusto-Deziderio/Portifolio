<script>
    window.onload = function () {

    //Modal de Projetos
    // const projectModal = new bootstrap.Modal('#projectModal');

    //Botao do Projeto
    var linkProject = $('#linkProject');

    //Botao de Games
    var buttonGames = document.getElementById("btnGames");


    //Botao de Web
    var buttonWeb = document.getElementById("btnWeb");

    var close = false;

    buttonGames.addEventListener("click", function () {
        buttonGames.classList.toggle("btn-selected");
        fillCard(buttonGames.id);
    });



    buttonWeb.addEventListener("click", function () {
        buttonWeb.classList.toggle("btn-selected");
        fillCard(buttonWeb.id);
    });


    function fillCard(id) {
        let divContent = document.createElement("div");
        divContent.setAttribute("id", 'dynamicDiv');

        if (id == "btnGames" && close == false) {
            buttonGames.appendChild(divContent);
            divContent.innerHTML =
                `<p>Games</p>`;
            close = true;

        } else if (id == "btnWeb" && close == false) {
            buttonWeb.appendChild(divContent);

        }  else if (id == "btnGames" && close == true) {
            let divContent = document.getElementById("dynamicDiv");
            divContent.remove();
            close = false;
        }

         else if (id == "btnWeb" && close == true) {
            let divContent = document.getElementById("dynamicDiv");
            divContent.remove();
            close = false;
        }
    }

         linkProject.click(function(){
             console.log(projectModal);

             // projectModal.show();
         });

};


</script>