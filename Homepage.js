
var dropdown = document.getElementById('myDropdown');

dropdown.addEventListener('change', function() {
  var selectedOption = dropdown.options[dropdown.selectedIndex];
  if (selectedOption.value !== "") {
    window.location.href = selectedOption.value + ".php";
  }
});




function onJson(json) {
    console.log('JSON ricevuto');
   
    const library = document.querySelector('#giochi');
    library.innerHTML = '';
   
    const num_results=50;
    
    for(let i=0; i<num_results; i++)
    {


      const immagine=json[i].thumbnail;
      const title=json[i].title;
      const genre=json[i].genre;
    
  
    const giochi = document.createElement('div');
    giochi.dataset.title = json[i].title;
    giochi.dataset.id=i;
    giochi.dataset.thumbnail=json[i].thumbnail;
    giochi.dataset.short_description=json[i].short_description;
    giochi.dataset.date=json[i].release_date;
    giochi.dataset.platform=json[i].platform;
    giochi.dataset.publisher=json[i].publisher;
    giochi.dataset.developer=json[i].developer;
    giochi.classList.add('giochi');


   
    const img = document.createElement('img');
    img.addEventListener("click",game)
    img.src=immagine;
    
    const caption = document.createElement('span');
    caption.setAttribute("class","Title");
    caption.textContent=title;

    const genere=document.createElement('span');
    genere.setAttribute("class","Gen");
    genere.textContent=genre;

    
    
    
    

    const button = document.createElement("button");
    button.setAttribute("class", "myButton");
    button.addEventListener('click', like);
   
   
    var alternate=false;

   
 

    function like(event){
      event.preventDefault();
      alternate=!alternate;
    
  
      if (alternate) {
        button.style.backgroundImage="url('img/Like.png')";
        album.appendChild(button);
       
      } 
      else{
        button.style.backgroundImage="url('img/Like1.jpg')";
        album.appendChild(button);
       
      }
    }
    
  

    const pref=document.createElement("input");
    pref.type="button";
    pref.setAttribute("class", "addtofav");

    const remv=document.createElement("input");
    remv.type="button";
    remv.setAttribute("class", "remove");
 

    pref.addEventListener("click", salva);
    remv.addEventListener("click", rimuovi);

    

    
    
  
    giochi.appendChild(img);
    giochi.appendChild(caption);
      
    giochi.appendChild(genere);
    giochi.appendChild(pref);
    giochi.appendChild(remv);
    giochi.appendChild(button);
  
    library.appendChild(giochi);

}
}

  
  
  function onResponse(response) {
    console.log('Risposta ricevuta');
    return response.json();
  }

  function searchtext(event)
  {
    
    event.preventDefault();

    
   
    const text_input = document.querySelector('#ricerca');
    
    let platform = encodeURIComponent(text_input.value);
    platform=platform.toLowerCase();
    console.log('Eseguo ricerca: ' + platform);
   
    const url = 'https://free-to-play-games-database.p.rapidapi.com/api/games?platform='+platform;
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'c179bed806msh804644e6080a565p1357a6jsn232d0d4e9f83',
            'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
        }
    };
   
    console.log(url);
    fetch(url,options).then(onResponse).then(onJson);
  }



  function search(event)
  {
  
    event.preventDefault();
    const url = 'https://free-to-play-games-database.p.rapidapi.com/api/games?platform=pc';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'c179bed806msh804644e6080a565p1357a6jsn232d0d4e9f83',
            'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
        }
    };
   
    console.log(url);
    fetch(url,options).then(onResponse).then(onJson);
  }
  


  function search1(event)
  {
    
    event.preventDefault();


    const url = 'https://free-to-play-games-database.p.rapidapi.com/api/games?category=shooter';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'c179bed806msh804644e6080a565p1357a6jsn232d0d4e9f83',
            'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
        }
    };
   
    console.log(url);
    fetch(url,options).then(onResponse).then(onJson);
  }
  function search2(event)
  {
  
    event.preventDefault();

  
    const url = 'https://free-to-play-games-database.p.rapidapi.com/api/games?category=pvp';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'c179bed806msh804644e6080a565p1357a6jsn232d0d4e9f83',
            'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
        }
    };
   
    console.log(url);
    fetch(url,options).then(onResponse).then(onJson);
  }
  function search3(event)
  {
    
    event.preventDefault();


    const url = 'https://free-to-play-games-database.p.rapidapi.com/api/games?category=fantasy';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'c179bed806msh804644e6080a565p1357a6jsn232d0d4e9f83',
            'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
        }
    };
   
    console.log(url);
    fetch(url,options).then(onResponse).then(onJson);
  }
  function search4(event)
  {
   
    event.preventDefault();

    
    const url = 'https://free-to-play-games-database.p.rapidapi.com/api/games?category=Anime';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'c179bed806msh804644e6080a565p1357a6jsn232d0d4e9f83',
            'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
        }
    };
   
    console.log(url);
    fetch(url,options).then(onResponse).then(onJson);
  }
  function search5(event)
  {
  
    event.preventDefault();

    
    const url = 'https://free-to-play-games-database.p.rapidapi.com/api/games?category=strategy';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'c179bed806msh804644e6080a565p1357a6jsn232d0d4e9f83',
            'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
        }
    };
   
    console.log(url);
    fetch(url,options).then(onResponse).then(onJson);
  }
  


  const form = document.querySelector('form')
  form.addEventListener('submit', searchtext)

  const nav= document.getElementById("botton")
  nav.addEventListener("click", search)

  const nav1 = document.getElementById("botton1")
  nav1.addEventListener("click", search1)

  const nav2 = document.getElementById("botton2")
  nav2.addEventListener("click", search2)

  const nav3 = document.getElementById("botton3")
  nav3.addEventListener("click", search3)

  const nav4 = document.getElementById("botton4")
  nav4.addEventListener("click", search4)

  const nav5 = document.getElementById("botton5")
  nav5.addEventListener("click", search5)


  function salva(event){
    event.preventDefault();
    
    
   
  console.log("Salvataggio")
 
  const doc = event.currentTarget.parentNode;
  const formData = new FormData();
  console.log(doc.dataset.thumbnail);
  console.log(doc.dataset.thumbnail);
  console.log(doc.dataset.id);
  console.log(doc.dataset.short_description);

  formData.append('id', doc.dataset.id);
  formData.append('title', doc.dataset.title);
  formData.append('image', doc.dataset.thumbnail);
  formData.append('short_description',doc.dataset.short_description);

  

  fetch("Preferiti.php", {method: 'post', body: formData}).then(dispatchResponse, dispatchError);
  event.stopPropagation();
  }

  function rimuovi(event){
    event.preventDefault();
    
    
  console.log("RIMOZIONE")

  const doc = event.currentTarget.parentNode;
  const formData = new FormData();
  console.log(doc.dataset.id);
  formData.append('id', doc.dataset.id);
  

  

  fetch("Rimuovidaipreferiti.php", {method: 'post', body: formData}).then(dispatchResponse, dispatchError);
  event.stopPropagation();
  }




  function clickLike(event){
    event.stopPropagation();
  }
  function dispatchResponse(response) {

    console.log(response);
    return response.json().then(databaseResponse); 
  }
  
  function dispatchError(error) { 
    console.log("Errore");
  }
  
  function databaseResponse(json) {
    if (!json.ok) {
        dispatchError();
        return null;
    }  
  }

  function game(event){
    console.log("Apro gioco")
 
    
    const doc = event.currentTarget.parentNode;
    const formData = new FormData();
    const formData2 = new FormData();
    console.log(doc.dataset.thumbnail);
    console.log(doc.dataset.id);
    console.log(doc.dataset.short_description);
  
    formData.append('id', doc.dataset.id);
    formData.append('title', doc.dataset.title);
    formData.append('image', doc.dataset.thumbnail);
    formData.append('date',doc.dataset.date);
    formData.append('platform',doc.dataset.platform);
    formData.append('publisher',doc.dataset.publisher);
    formData.append('developer',doc.dataset.developer);
    formData.append('short_description',doc.dataset.short_description);
  
  
    fetch("Game0.php", {method: 'post', body: formData}).then(dispatchResponse, dispatchError);

    window.location.href="http://localhost/Homework1/Game.php";
    
    
    event.stopPropagation();
  }
  

 
  
 
 
  



  




  
  