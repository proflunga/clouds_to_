//  populate the divs with products data
function populate_products_on_div(container_id, object_name, limit) {

    //  iterate the lowest_price_products
    var product_carousel = '';
    for (var i = 0; i <= limit; i++) {
        product_carousel += `<div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="products.php?a=product_detail&p_id=${object_name[i].id}">
                                <img src="assets/images/demos/demo11/products/${object_name[i].product_image}" alt="Product" width="300" height="337">
                                <img src="assets/images/demos/demo11/products/${object_name[i].product_image}" alt="Product" width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">${object_name[i].product_name} </a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: ${(object_name[i].product_rating/5)* 100}%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a  href="products.php?a=product_detail&p_id=${object_name[i].id}" class="rating-reviews">(${object_name[i].views} Reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$${object_name[i].product_price} </ins>
                            </div>
                        </div>
                    </div>
                </div>`;

    }

    document.getElementById(container_id).innerHTML = product_carousel;

    // lowest_price

}


//  populate the divs with products data
function populate_product_small_div(container_id, object_name, limit) {

    //  iterate the lowest_price_products

    var product_carousel_div = '';
    for (var i = 0; i < limit; i++) {

        product_carousel_div += `<div class="swiper-slide product-wrap">
        <div class="product text-center product-absolute">
            <figure class="product-media">
                <a  href="products.php?a=product_detail&p_id=${object_name[i].id}">
                    <img src="assets/images/demos/demo11/products/${object_name[i].product_image}" alt="Category image" width="130" height="146" />
                </a>
            </figure>
            <h4 class="product-name">
                <a href="products.php?a=product_detail&p_id=${object_name[i].id}">${object_name[i].product_name}</a>
            </h4>
        </div>
    </div>`;

    }



    document.getElementById(container_id).innerHTML = product_carousel_div;

    // lowest_price

}