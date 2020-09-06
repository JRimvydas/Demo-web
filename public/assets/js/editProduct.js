import {createCard} from "./createCard.js";

export function editProduct(form, id, parent) {
    const forma = new FormData(form);
    forma.append('id', id);
    fetch('/api/edit.php?id=' + id, {
        method: 'POST',
        body: forma
    }).then(response => response.json())
        .then(data => {
            if (data){
               form.style.display= "none";
               const card = createCard(data);
               parent.replaceWith(card);
            }
        });
}