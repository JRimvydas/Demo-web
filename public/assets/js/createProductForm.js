import {createNode} from "./createNode.js";


export function createProductForm(data, buttonName, handler) {
    const divas = document.getElementById('app');
    const form = createNode('form', {
        class: 'create_form',
        submit: handler
    })
    divas.prepend(form);
    const labelName = createNode('label', {for: 'name'}, 'Pavadinimas');
    form.append(labelName);
    const inputName = createNode('input', {
        name: 'name',
        type: 'text',
        value: data.name ?? '',
        placeholder: 'Pvz. Fotoaparatas'
    })
    form.append(inputName);
    const labelModel = createNode('label', {for: 'model'}, 'Modelis');
    form.append(labelModel);

    const inputModel = createNode('input', {
        name: 'model',
        type: 'text',
        value: data.model ?? '',
        placeholder: 'Pvz. Canon sf 123'
    })
    form.append(inputModel);

    const labelProducer = createNode('label', {for: 'producer'}, 'Gamintojas');
    form.append(labelProducer);

    const inputProducer = createNode('input', {
        name: 'producer',
        type: 'text',
        value: data.producer ?? '',
        placeholder: 'Pvz. Canon'
    })
    form.append(inputProducer);

    const labelInstock = createNode('label', {for: 'inStock'}, 'Sandėlyje');
    form.append(labelInstock);

    const inputInstock = createNode('input', {
        name: 'inStock',
        type: 'text',
        value: data.inStock ?? '',
        placeholder: 'Pvz. Taip'
    })
    form.append(inputInstock);

    const labelPrice = createNode('label', {for: 'price'}, 'Kaina');
    form.append(labelPrice);

    const inputPrice = createNode('input', {
        name: 'price',
        type: 'float',
        value: data.price ?? '',
        placeholder: 'Pvz. 9,99'
    })
    form.append(inputPrice);

    const labelUrl = createNode('label', {for: 'url'}, 'Nuotrauka (URL)');
    form.append(labelUrl);

    const inputUrl = createNode('input', {
        name: 'url',
        type: 'text',
        value: data.url ?? '',
        placeholder: 'Pvz. https://. . .'
    })
    form.append(inputUrl);

    const updateButton = createNode('button', {
        name: 'action',
        class: 'button',
    }, buttonName)
    form.append(updateButton);
}