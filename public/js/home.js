window.onload = function () {

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
        if(id == "btnGames" && close == false){
            console.log(divContent);
            buttonGames.appendChild(divContent);
            divContent.innerHTML =
                `<p>Games</p>`;
        } else if(id == "btnGames" && close == true){
            console.log(close);
            let divContent = document.getElementById("dynamicDiv");
            divContent.remove();
            console.log(close);
        }


     /*   if(id == "btnWeb" && close == false){
            buttonGames.appendChild(divContent);
            divContent.innerHTML =

                `  <p>Games</p>`;

            close = true;


        } else if(id == "btnWeb" && close == true){
            buttonGames.removeChild(divContent);
            close = false;
        }
*/
    }
};