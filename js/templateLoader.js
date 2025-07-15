function loadTemplateById(elemId) {
  fetch(`templates/${elemId}Template.html`)
      .then(res => res.text())
      .then(data => {
          document.getElementById(elemId).innerHTML = data;
      })
      .catch(err => console.error(`Erro ao carregar ${elemId}:`, err));
}

const ids = ["header"];

ids.forEach(id => loadTemplateById(id));