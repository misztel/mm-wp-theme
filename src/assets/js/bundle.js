import $ from 'jquery';
import '../../../node_modules/bootstrap/dist/js/bootstrap';
import '../../../node_modules/slick-carousel/slick/slick.min';


const menuToggler = document.querySelector('.menu-toggler');
const header = document.querySelector('.header');
const headerNav = document.querySelector('.header-nav');
const menu = document.querySelector('.menu');

document.addEventListener('click', (e) => {
  if (!e.target.parentElement.classList.contains('menu-item')) {
    closeSubMenus()
  }
});

const closeSubMenus = () => {
  menu.querySelectorAll('.show').forEach((elem) => {
    elem.parentElement.style.removeProperty('background-color');
    elem.parentElement.style.removeProperty('overflow');
    elem.style.removeProperty('overflow');
    elem.classList.remove('show');
    elem.style.removeProperty('height');
  })
}

const closeSubMenuSubMenus = (submenu) => {
  submenu.querySelectorAll('.show').forEach((elem) => {
    elem.parentElement.style.removeProperty('background-color');
    elem.parentElement.style.removeProperty('overflow');
    elem.classList.remove('show');
    elem.style.removeProperty('height');
  })
}



menu.addEventListener('click', (e) => {
  const childSubMenu = e.target.parentElement.querySelector('.sub-menu');
  const childSubMenuHeight = childSubMenu.scrollHeight;
  const parentSubMenu = e.target.parentElement.closest('.sub-menu');

  let openChildSubMenuHeight = 0;
  e.target.parentElement.parentElement.querySelectorAll('.show').forEach((elem) => {
    openChildSubMenuHeight += elem.scrollHeight;
  });

  if (e.target.parentElement.classList.contains('menu-item-has-children')) {
    if (childSubMenu.classList.contains('show')) {
      parentSubMenu
        ?
        parentSubMenu.style.height = parentSubMenu.scrollHeight - childSubMenuHeight + 'px'
        :
        closeSubMenus();
      e.target.setAttribute('aria-expanded', "false");
      childSubMenu.classList.remove('show');
      childSubMenu.style.removeProperty('height');
      childSubMenu.style.removeProperty('overflow');
      childSubMenu.parentElement.style.removeProperty('background-color');
    } else {
      if (e.target.closest('.sub-menu') === null) {
        const allOpenMenus = menu.querySelectorAll('.show');
        allOpenMenus.forEach((elem) => {
          elem.classList.remove('show');
          elem.style.removeProperty('height');
          elem.parentElement.style.removeProperty('background-color');
          elem.style.removeProperty('overflow');
        });
      }
      else {
        closeSubMenuSubMenus(e.target.closest('.sub-menu'));
        if (window.innerWidth < 992) {
          parentSubMenu.style.height = parentSubMenu.scrollHeight + childSubMenuHeight - openChildSubMenuHeight + 'px';
        }
        parentSubMenu.style.overflow = "visible";
      }
      e.target.setAttribute('aria-expanded', "true");
      childSubMenu.classList.add('show');
      childSubMenu.style.height = childSubMenuHeight + 'px';
      childSubMenu.parentElement.style.backgroundColor = 'rgb(255 255 255 / 15%)';
    }
  }
  //if any submenu is open, click enywhere other than submenu deletes show class everywhere
});

menuToggler.addEventListener('click', () => {
  if (menuToggler.classList.contains('toggled')) {
    menuToggler.setAttribute('aria-expanded', "false");
    menuToggler.classList.remove('toggled');
    headerNav.classList.remove('toggled');
    headerNav.style.removeProperty('min-height');
    setTimeout(() => {
      headerNav.style.removeProperty('display');
    }, 300);
  } else {
    menuToggler.setAttribute('aria-expanded', "true");
    headerNav.style.display = 'flex';
    headerNav.style.minHeight = "calc(100vh - " + header.offsetHeight + "px)";
    menuToggler.classList.add('toggled');
    headerNav.classList.add('toggled');
  }
})



// menu.addEventListener('click', (e) => {
//   if (e.target.classList.contains('menu-button')) {
//     e.preventDefault();
//     let menuButton = e.target;
//     let menuLink = menuButton.parentElement;
//     let menuItem = menuLink.parentElement;
//     if (menuItem.classList.contains('show')) {

//     } else {
//       menuItem.classList.add('show');
//     }
//   }
// })
