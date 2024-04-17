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
