const m_burger = document.querySelector(".burger-menu");
const m_items = document.querySelector(".menu-items").classList;

m_burger.addEventListener('mouseenter', () => {
    m_items.toggle("open");
});

m_burger.addEventListener('mouseleave', () => {
    m_items.toggle("open");
});