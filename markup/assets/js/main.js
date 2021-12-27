/**
 * Side Panel
 */
const side_panel_toggle_icon            =   document.getElementById('side-panel-toggle')
const side_panel                        =   document.getElementById('header-side-panel')
const openIcon                          =   document.getElementById('open')
const closeIcon                         =   document.getElementById('close')

if (window.innerWidth < 1201) {
    side_panel_toggle_icon.addEventListener('click', (e) => {
        side_panel.classList.toggle('toggle_panel')
    
        if (side_panel.classList.contains('toggle_panel')) {
            openIcon.style.display = 'none'
            closeIcon.style.display = 'block'
        } else {
            closeIcon.style.display = 'none'
            openIcon.style.display = 'block'
        }
    })
}

/**
 * Side Panel Accordion Icon
 */

const sidebar_category_menu_item = document.querySelectorAll('.sidebar-category-menu .accordion-button')

sidebar_category_menu_item.forEach(val => {
    // console.log(val);
    val.addEventListener('click', e => {
        var svg_icon = val.children[0];
        svg_icon.classList.toggle('rotate_toggle_icons')
    })
})