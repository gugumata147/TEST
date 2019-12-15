const searchButton = document.getElementById("searchGoogle");
const searchInput = document.getElementById("searchGoogleInput");

if (searchInput) {
    searchInput.addEventListener("keypress", function (e) {
        if (e.key === "Enter") {
            searchEvent();
        }
    });
}

if (searchButton) {
    searchButton.addEventListener("click", searchEvent);
}

function searchEvent() {
    let search = document.getElementsByName("search")[0].value;
    search = search.split(" ").join("+");
    searchGoogle(search);
}

function searchGoogle(search) {
    fetch(`${baseUrl}/${search}`)
        .then((body) => body.json())
        .then((data) => {
            if (data && data !== false) {
                buildResultSearch(data);
            } else {
                let show = document.querySelector(".show");
                let resultDiv = document.querySelector(".resultDiv");
                show.querySelector(".title").innerHTML = "Sua pesquisa não encontrou nenhum documento correspondente";
                resultDiv.innerHTML = "";
                resultDiv.append(show);
            }
        })
        .catch((error) => console.error('Whoops! Erro:', error.message));
}

function buildContainer(container, result) {
    container.querySelector(".title").innerHTML = result.title+"";
    container.querySelector(".url").innerHTML = "["+result.url+"]";
    container.querySelector(".url").href = result.url;
    return container;
}

function buildResultSearch(results) {
    let resultDiv = document.querySelector(".resultDiv");
    let buildDiv = document.querySelector(".show");
    resultDiv.innerHTML = "";
    resultDiv.appendChild(buildDiv);
    results.forEach(function (result) {
        let container = buildContainer(buildDiv, result);
        resultDiv.insertAdjacentHTML('beforeend', container.outerHTML);
    });
}
