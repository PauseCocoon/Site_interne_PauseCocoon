class Tabs extends HTMLElement{
  connectedCallback(){
    this.setAttribute('role','tablist');
    const tabs = Array.from(this.children);

    for (const tab of tabs) {
      const id = tab.getAttribute('href').replace('#','');
      const tabpanel = document.getElementById(id);
      tab.setAttribute('role','tab');
      tab.setAttribute('aria-selected','false');
      tab.setAttribute('tabindex','-1');
      tab.setAttribute('aria-controls',id);
      tab.setAttribute('id','tab-'+ id);
      tabpanel.setAttribute('role','tabpanel');
      tabpanel.setAttribute('arial-labelledby','tab-' + id);
      tabpanel.setAttribute('hidden','hidden');
      tabpanel.setAttribute('tabindex','0');

      tab.addEventListener('click', e => {
        e.preventDefault();
        this.activate(tab);
      });
    }
    console.log('connecté');
    this.activate(tabs[0]);
  }
  /**
 *
 * @param  {HTMLElement} tab
 */
  activate(tab){
    const tabCourante = this.querySelector('[aria-selected="true"]');
    if(tabCourante !== null){
      const tabpanel = document.getElementById(tabCourante.getAttribute('aria-controls'));
      tabCourante.setAttribute('aria-selected','false');
      tabCourante.setAttribute('tabindex','-1');
      tabpanel.setAttribute('hidden','hidden');
    }

    const id = tab.getAttribute('aria-controls');
    const tabpanel = document.getElementById(id);
    tab.setAttribute('aria-selected','true');
    tab.setAttribute('tabindex','0');
    tabpanel.removeAttribute('hidden');
  }
}
customElements.define('nav-tabs',Tabs);

/*var afficherOnglet = function(attribut){
  var li = attribut.parentNode
  var div = attribut.parentNode.parentNode.parentNode

  if (li.classList.contains('active')) {
    return false
  }
  else {
    //Retire .active de l'onglet actif
    div.querySelector('.tabs-title .active').classList.remove('active')
    //Ajout .active à l'onglet cliqué
    li.classList.add('active')
    //Retire .active du contenu actif
    div.querySelector('.contenu.active').classList.remove('active')
    //Ajout .active sur le contenu de l'onglet cliqué
    div.querySelector(attribut.getAttribute('href')).classList.add('active')
  }
}
var tabs = document.querySelectorAll('.tabs-title a');
for (var i = 0; i < tabs.length; i++) {
  tabs[i].addEventListener('click',function(e) {
    afficherOnglet(this)
  });
}

var hash = window.location.hash
var a = document.querySelector('a[href="' + hash + '"]')
if (a !== null && !a.parentNode.classList.contains('active')) {
  afficherOnglet(a)
}*/

const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')
tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      if (!tabContent.classList.contains('active')) {
        tabContent.classList.add('active')
      }
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })

});
