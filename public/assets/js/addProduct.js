import {createCard} from "./createCard.js";

export function addProduct(e, parent) {
    const form = new FormData(e);
    fetch('/api/create.php', {
        method: 'POST',
        body: form
    }).then(response => response.json())
        .then(data => {
            if (data) {
                e.style.display = "none";
                const card = createCard(data);
                parent.append(card);
            }
        });
}