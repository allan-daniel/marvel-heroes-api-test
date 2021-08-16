
const marvel = {
  render: () => {
    const urlAPI = 'https://gateway.marvel.com/v1/public/characters?ts=1&apikey=4f84962f475f3042c87468a2ecd56252&hash=5ed9838757749ebc0ddb39d3521e3912';
    const container = document.querySelector('#marvel-row');
    let contentHTML = '';
    const search = document.getElementById('search');
    //178d8db06ab5d92c2f229ba061a242f6a6fec73194f84962f475f3042c87468a2ecd56252

    fetch(urlAPI)
      .then(res => res.json())
      .then((json) => {
        for (const hero of json.data.results) {
          let urlHero = hero.urls[0].url;
          contentHTML += `
            <div class="col-size">
                <div class="item-hero">
                    <a href="${urlHero}" target="_blank">
                      <img src="${hero.thumbnail.path}.${hero.thumbnail.extension}" alt="${hero.name}" class="img-thumbnail">
                    </a>
                    <p class="title">${hero.name}</p>
                </div>    
            </div>`;
        }
        container.innerHTML = contentHTML;
      })
  }
};
marvel.render();

const searchHero = name => {
  const urlAPI = 'https://gateway.marvel.com/v1/public/characters?name=${hero}&ts=1&apikey=4f84962f475f3042c87468a2ecd56252&hash=5ed9838757749ebc0ddb39d3521e3912';
  const container = document.querySelector('#marvel-row');
  let contentHTML = '';
  hero = encondeURIComponent(name);

  fetch(urlAPI)
      .then(res => res.json())
      .then((json) => {
        res.data.results.forEach(e => {
          drawHero(e);
        })

        .catch(e => console.log(e))
      })

  search.addEventListener('keyup', e => {
    if (e.keyCode === 13) {
      searchHero(e.target.value.trim());

    }
  })    

}