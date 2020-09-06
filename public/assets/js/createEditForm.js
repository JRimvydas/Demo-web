import {editProduct} from "./editProduct.js";
import {createProductForm} from "./createProductForm.js";

export function createEditFrom(data, card) {
    const handler = e => {
        e.preventDefault();
        editProduct(e.target, data.id, card)
    }
    const form = createProductForm(data, 'Edit', handler);

}