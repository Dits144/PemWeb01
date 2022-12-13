document.querySelectorAll("#opts a").forEach((a) =>
a.addEventListener("click",(element) => {
    computerChoice(element);
})
);

function computerChoice(element) {
    let pilihanUser = element.target.innerText;

    let pilihanComputer = document.querySelector("#result");

    let choices = ["Rock", "Paper", "Scissors"];

    pilihanComputer.innerHTML =
    choices[Math.round(Math.random() * choices.length)];
    pilihanComputer = pilihanComputer.innerHTML;

    if(pilihanUser == pilihanComputer){
        alert("DRAWWWW");
    }else if(pilihanUser == "Paper" && pilihanComputer == "Rock"){
        alert("YOU WINNN")
    }else if (pilihanUser == "Rock" && pilihanComputer == "Scissors") {
        alert("YOU WINNNN");
    }else if(pilihanUser == "Scissors" && pilihanComputer == "Paper"){
        alert("YOU WINNNN");
    }

    if(pilihanUser == "Rock" && pilihanComputer == "Paper"){
        alert("YOU LOSEEE");
    }else if (pilihanUser == "Paper" && pilihanComputer == "Scissors") {
        alert("YOU LOSEEEE");
    }else if(pilihanUser == "Scissors" && pilihanComputer == "Rock"){
        alert("YOU LOSEEEE");
    }
}