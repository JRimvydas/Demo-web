import {createNode} from "./createNode.js";
import {createCard} from "./createCard.js";
import {createAddForm} from "./createAddForm.js";

export function createContainer(dt) {
    const divas = document.getElementById('app');
    const container = createNode('div', {class: 'container'});
    const addMore = createNode('button', {
        class: 'button',
        name: 'action',
        click: () => createAddForm(container)
    }, 'Pridėti prekę');
    divas.append(addMore);;
    divas.append(container);
    dt.forEach(data => {
        const card = createCard(data);
        container.append(card);
    })
}
