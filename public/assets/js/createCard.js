import {createNode} from "./createNode.js";
import {createEditFrom} from "./createEditForm.js";
import {deleteProduct} from "./deleteProduct.js";

export function createCard(data){
    const card = createNode('div', {class: 'card'});

    const title = createNode('h2', {}, `${data.price} €`);

    const image = createNode('img', {src: `${data.url}`});

    const info = createNode('div', {class: 'info'});
    const pName = createNode('p', {}, data.name);

    const pModel = createNode('p', {}, `Modelis: ${data.model} `);

    const pProducer = createNode('p', {}, `Gamintojas: ${data.producer}`);
    info.append(pName, pModel, pProducer);

    const footer = createNode('div', {class: 'card_footer'});
    const pQuantity = createNode('p', {}, `Sandėlyje: ${data.inStock}`);
    footer.append(pQuantity);

    const buttons = createNode('div', {class: 'buttons'});
    const buttonEdit = createNode('button', {
        class: 'button',
        click: () => createEditFrom(data, card)
    }, 'Keisti');

    const buttonDelete = createNode('button', {
        class: 'button',
        click: () => deleteProduct(data.id, card)
    }, 'Trinti');

    buttons.append(buttonEdit, buttonDelete);
    card.append(title, image, info, footer, buttons);
    return card;
}