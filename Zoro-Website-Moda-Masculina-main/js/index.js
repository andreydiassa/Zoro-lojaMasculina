// mobile search box 
const searchIcon = document.querySelector('.search-icon');
const searchBox = document.querySelector('.search-box');

searchIcon.addEventListener('click', () => {
    searchBox.classList.toggle('active')
})

// header menu 
const menuIcon = document.querySelector('.menu-icon');
const menu = document.querySelector('.menu');

menuIcon.addEventListener('click' , () => {
    if(menuIcon.classList.contains('bx-menu-alt-right')){
        menuIcon.classList.remove('bx-menu-alt-right');
        menuIcon.classList.add('bx-chevrons-right');
        menu.classList.toggle('active');
    }else{
        menuIcon.classList.remove('bx-chevrons-right');
        menuIcon.classList.add('bx-menu-alt-right');
        menu.classList.toggle('active');
    }
})   
// user login // 
const userIcon = document.querySelector('.bx-user');

userIcon.addEventListener('click', () => {
    window.location.href = 'tela-de-login.html'; // Redireciona para a página de login
});

// mode change  
const modeChangeIcon = document.querySelector('.mode-change-icon');

modeChangeIcon.addEventListener('click' , () => {
    if(modeChangeIcon.classList.contains('bx-moon')){
        modeChangeIcon.classList.remove('bx-moon');
        modeChangeIcon.classList.add('bxs-moon');
        modeChangeIcon.classList.toggle('active');
        document.body.classList.toggle('dark-theme');
    }else{
        modeChangeIcon.classList.remove('bxs-moon');
        modeChangeIcon.classList.add('bx-moon');
        modeChangeIcon.classList.toggle('active');
        document.body.classList.toggle('dark-theme');
    }
}) 
// banner rotativo
let time = 5000,
    currentImageIndex = 0,
    images = document
                .querySelectorAll("#slider img")
    max = images.length;

function nextImage() {

    images[currentImageIndex]
        .classList.remove("selected")

    currentImageIndex++

    if(currentImageIndex >= max)
        currentImageIndex = 0

    images[currentImageIndex]
        .classList.add("selected")
}

function start() {
    setInterval(() => {
        // troca de imagem
        nextImage()
    }, time)
}

window.addEventListener("load", start)

//carrinho de compras
var cart = JSON.parse(localStorage.getItem('cart')) || [];

function removeFromCart(index) {
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCart();
}

function updateCart() {
        var cartDiv = document.getElementById('cart');
        cartDiv.innerHTML = '';
        cart.forEach(function(product, index) {
            var cartItemDiv = document.createElement('div');
            cartItemDiv.className = 'cart-item';
            var productNameDiv = document.createElement('div');
            productNameDiv.textContent = product.productName + ' - R$' + product.price;
            var removeButton = document.createElement('button');
            removeButton.textContent = '-';
            removeButton.onclick = function() {
                removeFromCart(index);
            };
            cartItemDiv.appendChild(productNameDiv);
            cartItemDiv.appendChild(removeButton);
            cartDiv.appendChild(cartItemDiv);
        });
}

    // Limpa o Carrinho
function cartClear() {
    cart=""
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
}

updateCart();

function alertPag() {
    alert('Pagamento Realizado com sucesso! Volte Sempre!');
}

var cart = JSON.parse(localStorage.getItem('cart')) || [];

function addToCart(productName, price) {
    cart.push({productName: productName, price: price});
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(productName + ' adicionado ao carrinho!');
}

function cadastro() {
  alert('Cadastro feito com sucesso!')
  
}
function searchProducts() {
    
    var searchTerm = document.querySelector('.input-search').value.toLowerCase();
    var products = document.querySelectorAll('.product');

    products.forEach(function(product) {
        var productName = product.querySelector('h4').innerText.toLowerCase();
        if (productName.includes(searchTerm)) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

document.querySelector('.input-search').addEventListener('keyup', searchProducts);
