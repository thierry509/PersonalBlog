export let getApi = async (url)=>{
    let response =  await fetch(url);
    console.log(response);
    if(response.ok === true){
        return response.json();
    }
    throw new Error('Impposible de contacter le serveur'); 
}