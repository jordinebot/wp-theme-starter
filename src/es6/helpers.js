/**
 * Credit: Lea Verou <http://lea.verou.me/>
 */
function $$(selector, context = document) {
    let elements = context.querySelectorAll(selector);
    return Array.prototype.slice.call(elements);
}

export { $$ as default }