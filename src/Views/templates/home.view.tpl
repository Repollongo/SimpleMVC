<h1>Ofertas del Día</h1>
<div class="product-list">
    {{foreach productsOnSale}}
        <div class="producto" data-productId="{{ProductoId}}">
            <h2>{{productName}}</h2>
            <img src="{{productImgUrl}}" alt="{{productName}}">
            <p>{{productDescription}}</p>
            <span class="price">${{productPrice}}</span>
            <button class="add-to-cart">Agregar al Carrito</button>
        </div>
    {{endfor productsOnSale}}
</div>

<h1>Destacados</h1>
<div class="product-list">
    {{foreach productsHighlighted}}
        <div class="producto" data-productId="{{ProductoId}}">
            <h2>{{productName}}</h2>
            <img src="{{productImgUrl}}" alt="{{productName}}">
            <p>{{productDescription}}</p>
            <span class="price">${{productPrice}}</span>
            <button class="add-to-cart">Agregar al Carrito</button>
        </div>
    {{endfor productsHighlighted}}
</div>

<h1>Novedades</h1>
<div class="product-list">
    {{foreach productsNew}}
        <div class="producto" data-productId="{{ProductoId}}">
            <h2>{{productName}}</h2>
            <img src="{{productImgUrl}}" alt="{{productName}}">
            <p>{{productDescription}}</p>
            <span class="price">${{productPrice}}</span>
            <button class="add-to-cart">Agregar al Carrito</button>
        </div>
    {{endfor productsNew}}
</div>
