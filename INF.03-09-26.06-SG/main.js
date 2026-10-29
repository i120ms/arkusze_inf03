function dodaj(potrawa){
    const lista = document.getElementById("zamowienie")
    const nowyElement = document.createElement("li")
    nowyElement.innerHTML = potrawa
    nowyElement.title = "kliknij aby usunąć"
    nowyElement.onclick = function(){
        // nowyElement.remove()
        if(confirm("czy na pewno chcesz usunąć: " + potrawa + "?")){
            nowyElement.remove()
        }
    }
    lista.append(nowyElement)
}

function wyczyscZamowienie(){
    const lista = document.getElementById("zamowienie")
    lista.innerHTML = ""
}

function zatwierdzZamowienie(){
    const lista = document.getElementById("zamowienie")
    alert("Zamowienie zostało przekazane do realizacji")
    lista.innerHTML = ""
}