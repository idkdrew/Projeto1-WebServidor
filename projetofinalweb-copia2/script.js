document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.carousel-item');
  
    let currentIndex = 0;
  
    function showItem(index) {
        items.forEach((item, i) => {
            const transformValue = `translateX(${-index * 100}%)`;
            item.style.transform = transformValue;
        });
    }
  
    function nextItem() {
        currentIndex = (currentIndex + 1) % items.length;
        showItem(currentIndex);
    }
  
    function startCarousel() {
        setInterval(nextItem, 3000); 
    }
  
    showItem(currentIndex);
    startCarousel();
  });
  
/*  function sortProducts() {
    const sortBy = document.getElementById('sort-by').value;

    if (sortBy === 'name') {
        sortByTitle();
    } else if (sortBy === 'price') {
        sortByPrice();
    }
}

function sortByTitle() {
    const productContent = document.querySelector('.product-content');
    const productos = Array.from(productContent.querySelectorAll('.product'));

    productos.sort((a, b) => {
        const titleA = a.querySelector('h3').textContent.toLowerCase();
        const titleB = b.querySelector('h3').textContent.toLowerCase();
        return titleA.localeCompare(titleB);
    });

    productos.forEach(product => {
        productContent.appendChild(product);
    });
}

function sortByPrice() {
    const productContent = document.querySelector('.product-content');
    const productos = Array.from(productContent.querySelectorAll('.product'));

    productos.sort((a, b) => {
        const priceA = parseFloat(a.querySelector('p').textContent.replace('R$', '').replace(',', '.'));
        const priceB = parseFloat(b.querySelector('p').textContent.replace('R$', '').replace(',', '.'));
        return priceA - priceB;
    });

    productos.forEach(product => {
        productContent.appendChild(product);
    });
}


  if (window.location.pathname === '/projetofinalweb-copia2/projetofinalweb-copia/compras.html') {
    
    const productsContainer = document.querySelector('.product-content');
    const productos = productsContainer.querySelectorAll('.product');
    const productsPerPage = 6; // Número de produtos por página
    const pagination = document.getElementById('pagination');
  

  
  
    function displaySortedProducts(sortedProducts) {
        const productContent = document.querySelector('.product-content');
        productContent.innerHTML = '';
        sortedProducts.forEach(product => {
            productContent.appendChild(product);
        });
    }
  
    document.getElementById('sort-by').addEventListener('change', function() {
        const selectedValue = this.value;
        if (selectedValue === 'name') {
            sortByTitle();
        } else if (selectedValue === 'price') {
            sortByPrice();
        }
    });
  

  
    function displayProductDetails(product) {
        const productName = product.querySelector('h3').textContent;
        const productPrice = product.querySelector('p').textContent;
        let productDescription = '';
        let additionalInfo = '';
  
        switch (productName) {
            case 'Seguidores no instagram':
                productDescription = 'Obtenha 15.000 seguidores para sua conta no Instagram.';
                additionalInfo = 'Serviço de entrega em até 48 horas.';
                break;
            case 'Curso Online':
                productDescription = 'Aprenda a vender de forma orgânica pela internet.';
                additionalInfo = 'Acesso vitalício ao curso.';
                break;
            case 'Tabela do Pix do Urubu 1':
                productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 200 reais há um retorno de 2000 reais.';
                additionalInfo = 'Serviço de entrega em até 48 horas.';
                break;
            case 'Tabela do Pix do Urubu 2':
                productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 250 reais há um retorno de 2500 reais.';
                additionalInfo = 'Serviço de entrega em até 48 horas.';
                break;
            case 'Tabela do Pix do Urubu 3':
                productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 300 reais há um retorno de 3000 reais.';
                additionalInfo = 'Serviço de entrega em até 48 horas.';
                break;
            case 'Tabela do Pix do Urubu 4':
                productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 350 reais há um retorno de 3500 reais.';
                additionalInfo = 'Serviço de entrega em até 48 horas.';
                break;
            case 'Tabela do Pix do Urubu 5':
                productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 400 reais há um retorno de 4000 reais.';
                additionalInfo = 'Serviço de entrega em até 48 horas.';
                break;
            case 'Tabela do Pix do Urubu 6':
                    productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 450 reais há um retorno de 4500 reais.';
                    additionalInfo = 'Serviço de entrega em até 48 horas.';
                    break;
            case 'Tabela do Pix do Urubu 7':
                productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 500 reais há um retorno de 5000 reais.';
                additionalInfo = 'Serviço de entrega em até 48 horas.';
                break;
            case 'Tabela do Pix do Urubu 8':
                productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 550 reais há um retorno de 5500 reais.';
                additionalInfo = 'Serviço de entrega em até 48 horas.';
                break;
            case 'Tabela do Pix do Urubu 9':
                    productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 600 reais há um retorno de 6000 reais.';
                    additionalInfo = 'Serviço de entrega em até 48 horas.';
                    break;
            case 'Tabela do Pix do Urubu 10':
                productDescription = 'Invista seu dinheiro da melhor forma! Enviando apenas 650 reais há um retorno de 6000 reais.';
                additionalInfo = 'Serviço de entrega em até 48 horas.';
                break;
   
            default:
                productDescription = 'Descrição padrão do produto.';
                additionalInfo = 'Informações adicionais padrão.';
                break;
        }
  
      
        const productDetails = document.getElementById('product-details');
        productDetails.innerHTML = `
            <h2>Produto: ${productName}</h2>
            <p>Valor: ${productPrice}</p>
            <p>Descrição: ${productDescription}</p>
            <p>Observação: ${additionalInfo}</p>
        `;
  
        const modal = document.getElementById('product-modal');
        modal.style.display = 'block';
    }
  
  
    
    productos.forEach(product => {
        product.addEventListener('click', () => {
            displayProductDetails(product);
        });
    });
  
    
    const closeButton = document.querySelector('.close');
    closeButton.addEventListener('click', () => {
        const modal = document.getElementById('product-modal');
        modal.style.display = 'none';
    });
  
    
    window.addEventListener('click', event => {
        const modal = document.getElementById('product-modal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
  }

  
  const products = [
    {
        id: 1,
        name: "15.000 seguidores no instagram",
        price: 500.00,
    },
    {
        id: 2,
        name: "Curso Online",
        price: 300.00,
    },
    {
        id: 3,
        name: "Tabela do urubu R$200",
        price: 200.00,
    },
    {
        id: 4,
        name: "Tabela do urubu R$250",
        price: 250.00,
    },
    {
        id: 5,
        name: "Tabela do urubu R$300",
        price: 300.00,
    },
    {
        id: 6,
        name: "Tabela do urubu R$350",
        price: 350.00,
    },
    {
        id: 7,
        name: "Tabela do urubu R$400",
        price: 400.00,
    },
    {
        id: 8,
        name: "Tabela do urubu R$450",
        price: 450.00,
    },
    {
        id: 9,
        name: "Tabela do urubu R$500",
        price: 500.00,
    },
    {
        id: 10,
        name: "Tabela do urubu R$550",
        price: 550.00,
    },
    {
        id: 11,
        name: "Tabela do urubu R$600",
        price: 600.00,
    },
    {
        id: 12,
        name: "Tabela do urubu R$650",
        price: 650.00,
    },
  ];
  
  const itemCountElement = document.querySelector(".item-count");
  
  
  function addItemToCart(productId) {
    const cart = getItemsFromCart();
    const productDetails = getProductDetailsById(productId);
  
    if (!productDetails) {
        console.warn("Product not found:", productId);
        return;
    }
  
    let found = false;
    for (const item of cart) {
        if (item.id === productId) {
            found = true;
            item.quantity += 1;
            break;
        }
    }
  
    if (!found) {
        cart.push({
            id: productId,
            quantity: 1,
            name: productDetails.name,
            price: productDetails.price,
        });
    }
  
    updateItemCount();
    localStorage.setItem("cart", JSON.stringify(cart));
  }
  
  function getProductDetailsById(productId) {
    for (const product of products) {
        if (product.id === productId) {
            return product;
        }
    }
  
    return null;
  }
  
  function getItemsFromCart() {
    const cart = localStorage.getItem("cart");
    const cartItems = JSON.parse(cart) || [];
    return cartItems;
  }
  
  
  function updateItemCount() {
    const cartItems = getItemsFromCart();
    const itemCount = cartItems.length;
    itemCountElement.textContent = itemCount;
  }
  
  document.addEventListener("DOMContentLoaded", function () {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
  
    addToCartButtons.forEach(button => {
        button.addEventListener("click", () => {
            const productId = button.getAttribute("data-product-id"); 
  
            if (productId) {
                addItemToCart(parseInt(productId));
            }
        });
    });
  

    updateItemCount();
  });

  console.log('Caminho da Página:', window.location.pathname);
  const path = window.location.pathname.trim().toLowerCase();
      if (path === '/projetofinalweb-copia2/projetofinalweb-copia/checkout.html') {
        console.log('testano')
          const cartItems = getItemsFromCart();
          const cartItemsContainer = document.querySelector('.cart-items tbody');
          
  
          const documentFragment = document.createDocumentFragment();
        
          for (let i = 0; i < cartItems.length; i++) {
            const item = cartItems[i];
        
            const cartItemElement = document.createElement('tr');
            cartItemElement.innerHTML = `
              <td><img src="imagensCompras/${item.id}.png"></td>
              <td>
                <h2>${item.name}</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </td>
              <td>
                <h3>Preço: R$${item.price}</h3>
                <br>
                <a class="remove-item" data-product-id="${item.id}">x</a> Remover
              </td>
              <td>
                <div class="qty">
                  <div class="prev"><a href="checkout.html"></a>-</div>
                  <div class="next"><a href="checkout.html"></a>+</div>
                  <input type="number" name="cartNumber" class="cartNumber" value="${item.quantity}" min="1" max="10" data-quantity="${item.quantity}">
                </div>
                <br><br>
                <h3>R$ ${(item.price * item.quantity).toFixed(2)}</h3>
              </td>
            `;
        
            
            cartItemElement.querySelector('.prev').addEventListener('click', () => decrementQuantity(item.id));
            cartItemElement.querySelector('.next').addEventListener('click', () => incrementQuantity(item.id));
            cartItemElement.querySelector('.remove-item').addEventListener('click', () => removeItem(item.id));

            documentFragment.appendChild(cartItemElement);
          }

          cartItemsContainer.replaceChild(documentFragment, cartItemsContainer.firstChild);
        }
    
    function decrementQuantity(productId) {
      const cartItems = getItemsFromCart();
    
      for (const item of cartItems) {
        if (item.id === productId) {
          item.quantity--;
          break;
        }
      }
    
      updateItemCount();
      localStorage.setItem("cart", JSON.stringify(cartItems));
      location.reload();
  
    }
    
    function incrementQuantity(productId) {
      const cartItems = getItemsFromCart();
    
      for (const item of cartItems) {
        if (item.id === productId) {
          item.quantity++;
          break;
        }
      }
   
      updateItemCount();
      localStorage.setItem("cart", JSON.stringify(cartItems));
      location.reload();
  
    }
    
    function removeItem(productId) {
      const cartItems = getItemsFromCart();
    
      const index = cartItems.findIndex(item => item.id === productId);
    
      cartItems.splice(index, 1);
    
      updateItemCount();
      localStorage.setItem("cart", JSON.stringify(cartItems));
      location.reload();
    }

  function calculateCartTotal() {
      const cartItems = getItemsFromCart();
      let total = 0;
  
      for (const item of cartItems) {
          total += item.price * item.quantity;
      }
  
      return total.toFixed(2);
  }
  
  
  function updateCartSummary() {
      const totalElement = document.querySelector('.checkout-total span');
  

      if (totalElement) {
          const cartTotal = calculateCartTotal();
          totalElement.textContent = `R$ ${cartTotal}`;
      }
  }
  
  
  function updateItemCount() {
      const cartItems = getItemsFromCart();
      const itemCount = cartItems.length;
      itemCountElement.textContent = itemCount;
  

      updateCartSummary();
  
      localStorage.setItem("cart", JSON.stringify(cartItems));
  }
  
  document.addEventListener('DOMContentLoaded', function () {

      if (window.location.pathname === '/projetofinalweb-copia2/projetofinalweb-copia/checkout.html') {

  
          updateCartSummary();  
                  const cupomButton = document.querySelector('.cupom');
                  cupomButton.addEventListener('click', applyCupom);
              }
          });
          
          function applyCupom() {
              const cupomInput = document.querySelector('input[type="text"]');
              const cupomValue = cupomInput.value.trim().toUpperCase();
          
              if (cupomValue === 'UTFPR') {
                  applyDiscount(0.15);
                  updateCartSummary();
                  
                  alert('Cupom aplicado com sucesso! Desconto de 15% concedido.');
              } else {
                  alert('Cupom inválido. Tente novamente.');
              }
          }
          

          function applyDiscount(discountRate) {
              const cartItems = getItemsFromCart();
          
              for (const item of cartItems) {

                  const discountedPrice = item.price * (1 - discountRate);
                  item.price = discountedPrice;
              }
          
              localStorage.setItem('cart', JSON.stringify(cartItems));
          }

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('cadastro-form');

    if(form){
    form.addEventListener('submit', function (event) {
        event.preventDefault(); 

        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;
        const cpf = document.getElementById('cpf').value;
        const cep = document.getElementById('cep').value;
        const rua = document.getElementById('rua').value;
        const bairro = document.getElementById('bairro').value;
        const cidade = document.getElementById('cidade').value;
        const uf = document.getElementById('uf').value;
        const numero = document.getElementById('numero').value;
        const dataNascimento = document.getElementById('data-nascimento').value;
        const senha = document.getElementById('senha').value;

        // Validações
        if (
            nome.trim() === '' ||
            email.trim() === '' ||
            cpf.trim() === '' ||
            cep.trim() === '' ||
            rua.trim() === '' ||
            bairro.trim() === '' ||
            cidade.trim() === '' ||
            uf.trim() === '' ||
            numero.trim() === '' ||
            dataNascimento.trim() === '' ||
            senha.trim() === ''
        ) {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Por favor, insira um e-mail válido.');
            return;
        }

        const cpfRegex = /^[0-9]{11}$/;
        if (!cpfRegex.test(cpf)) {
            alert('Por favor, insira um CPF válido.');
            return;
        }

        const cepRegex = /^[0-9]+$/;
        if (!cepRegex.test(cep)) {
            alert('Por favor, insira um CEP válido.');
            return;
        }

        const today = new Date();
        const birthDate = new Date(dataNascimento);
        const age = today.getFullYear() - birthDate.getFullYear();
        const month = today.getMonth() - birthDate.getMonth();

        if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        if (age < 18) {
            alert('Você precisa ter pelo menos 18 anos para se cadastrar.');
            return;
        }

        if (senha.length < 8) {
            alert('A senha deve ter no mínimo 8 caracteres.');
            return;
        }

        form.submit();

        const userData = {
            username: nome, 
            loggedIn: true, 

        };

        localStorage.setItem("userData", JSON.stringify(userData));

        window.location.href = '/projetofinalweb-copia2/projetofinalweb-copia/compras.html';
        
    });

}});

document.addEventListener('DOMContentLoaded', function () {
    if (window.location.pathname === '/projetofinalweb-copia2/projetofinalweb-copia/checkout.html') {
        const loggedInUser = localStorage.getItem("userData");

        if (!loggedInUser || !JSON.parse(loggedInUser).loggedIn) {
            window.location.href = '/projetofinalweb-copia2/projetofinalweb-copia/cadastro.html';
        } else {
            const cupomButton = document.querySelector('.cupom');
            if (cupomButton) {
                cupomButton.addEventListener('click', applyCupom);
            }
        }
    }
});

const userData = JSON.parse(localStorage.getItem("userData"));

if (userData && userData.loggedIn) {
    console.log("Usuário cadastrado:", userData.username);
} else {
    console.log("Usuário não cadastrado");
}

function finalizePurchase() {
    localStorage.removeItem('cart');

    window.location.href = '/projetofinalweb-copia2/projetofinalweb-copia/checkout.html';
}

document.addEventListener('DOMContentLoaded', function () {
    const finalizeButton = document.getElementById('finalizar-compra');

    if (finalizeButton) {
        finalizeButton.addEventListener('click', finalizePurchase);
    }
});
*/
