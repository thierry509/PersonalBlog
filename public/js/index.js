import { Element } from "./element.js";
import { getApi } from "./fetch.js";
import { addImg, toggleMenu } from "./function.js";
let main = document.querySelector('main')
//call de function for toogle de menu of mobil device
toggleMenu()
//create de loader for images
let element = new Element();
let loader = element.createElement('div', ['loader'])

//Select all image of the DOM
let images = document.querySelectorAll('.img');
for(let i = 0; i< images.length; i++){
    images[i].appendChild(loader.cloneNode())
    
}
await addImg(
    './img/logo_thierry.png',
    document.querySelector('nav .logo a .img')
)
if(location.pathname == '/'){
    await addImg(
        './img/thierry.png',
        document.querySelector('#home .box .box-img .img')
    )
    await addImg(
        './img/courseOnline.PNG',
        document.querySelector('#project .list li .img.courseOnline')
    )
    await addImg(
        './img/myport.PNG',
        document.querySelector('#project .list li .img.thierry509')
    )
    await addImg(
        './img/batay_nan_espas.PNG',
        document.querySelector('#project .list li .img.batay')
    )
}
function ScrollY(){
    var supportPageOffset = window.pageXOffset !== undefined;
    var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");
    return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;

}
let protocole = 'http://'
let host = 'localhost:5000';
let recentPost = 
getApi(protocole + host + '/recentPost').then(post=>{
    post.map(item=>{
        let templateElement = document.querySelector('#post-box-template')
        .content.cloneNode(true)
        templateElement.querySelector('h3').innerHTML = item.title;
        templateElement.querySelector('.category').innerHTML = item.category;
        templateElement.querySelector('a').href = '/post/' + item.id;
        document.querySelector('#recent .posts').append(templateElement);
    })
});
getApi(protocole + host + '/popularPost').then(post=>{
    post.map(item=>{
        let templateElement = document.querySelector('#post-box-template')
        .content.cloneNode(true)
        templateElement.querySelector('h3').innerHTML = item.title;
        templateElement.querySelector('.category').innerHTML = item.category;
        templateElement.querySelector('a').href = '/post/' + item.id;
        document.querySelector('#popular .posts').append(templateElement);
    })
})
