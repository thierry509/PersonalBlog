export let toggleMenu = () =>{
    let menu = document.querySelector('nav .menu');
    let navList = document.querySelector('nav ul');
    // main = document.querySelector("main");
    menu.addEventListener('click', ()=>{
    navList.classList.toggle('active');
    });
}
/**
 * 
 * @param {string} urlImage 
 * @param {HTMLElement} element 
 * @returns {Promise}
 */
let LoadImage = async (urlImage)=>{
    
    return new Promise((resove, reject)=>{
        let img = new Image();
        img.onload = ()=>resove(img);
        img.onerror = reject;
        img.src = urlImage;
    });
}

export let addImg = (urlImage, element)=>{
    LoadImage(
        urlImage
    ).then((r)=>{
        element.append(r);
        element.lastElementChild.classList.add('loaded')
        element.firstElementChild.classList.add('hidden')
    }).catch((e)=>{
        console.log(e)
    })
}