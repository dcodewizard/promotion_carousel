(function( $, wp ) {
    const restUrl = wp.apiFetch.url( 'wp/v2/promotion' ); // Assuming your custom post type is "promotion"
  
    const swiperUrl = 'https://unpkg.com/swiper@8/swiper-bundle.min.js'; // Replace with the desired Swiper.js version

    $( document ).ready( function() {
      // Fetch promotion data using REST API
      wp.apiFetch( { url: restUrl } )
        .then( function( promotions ) {
          const carouselContainer = $( '.promotion-carousel' ); // Replace with selector for your carousel container
          let carouselHtml = '';
  
          // Loop through promotions and build carousel HTML
          promotions.forEach( function( promotion ) {
            const image = promotion.featured_media ? promotion.featured_media.source_url : ''; // Adjust based on your meta field/image logic
            const title = promotion.title.rendered;
            const text = promotion.content.rendered;
            const buttonText = promotion.meta.button_text; // Assuming you have a "button_text" meta field
  
            carouselHtml += `
              <div class="promotion-item">
                <img src="${image}" alt="${title}" />
                <h3>${title}</h3>
                <p>${text}</p>
                <a href="#" class="button">${buttonText}</a>
              </div>
            `;
          } );
  
          carouselContainer.html( carouselHtml );
        } );
    } );
  })( jQuery, wp );
  