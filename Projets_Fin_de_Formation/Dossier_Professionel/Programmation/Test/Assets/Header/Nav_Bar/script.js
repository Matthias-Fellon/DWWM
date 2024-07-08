let accordeons = document.getElementsByClassName("accordeon");

// for(let i = 0; i < accordeons.length; i++) {
//     accordeons[i].addEventListener("click", () => {
//         for (let j = 0; j < accordeons.length; j++) {
//             if(accordeons[j].children[1].style.display === "block") {
//                 accordeons[j].children[1].style.display = "none";
//             }
//         }
//         if (accordeons[i].children[1]) {
//             let panel = accordeons[i].children[1];
//             if (panel.style.display === "block") {
//                 panel.style.display = "none";
//             } else {
//                 panel.style.display = "block";
//             }
//         }
//     });
// }

for(let i = 0; i < accordeons.length; i++) {
    accordeons[i].addEventListener("click", () => {
        if (accordeons[i].children[1]) {
            let panel = accordeons[i].children[1];
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        }
    });
}