import {addProduct} from "./addProduct.js";
import {createProductForm} from "./createProductForm.js";

export function createAddForm(dt) {
    const handler = e => {
        e.preventDefault();
        addProduct(e.target, dt);
    }
    const form = createProductForm({}, 'Pridėti', handler);
}