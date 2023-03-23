export class Element{
    /**
     * @var {HTMLElement}
     */
    #element;
    /**
     * Create a HTML element
     * @param {string} tagName 
     * @param {Array} classNames 
     * @returns {HTMLElement}
     */
    createElement (tagName, classNames = []){
        let elem = document.createElement(tagName)
        classNames.map(className=>
            elem.classList.add(className)
            );
        this.#element = elem
        return elem;
    }
    /**
     * Multiply this element HTML
     * @param {Number} len 
     * @return {[HTMLElement]}
     */
    multipleElement(len){
        let elements = []
        for(let i = 0; i<= len; i++){
            elements.push(this.#element);
        }
        return elements;
    }
}