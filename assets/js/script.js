const imageContainer = document.querySelector('#image-container');
const images = imageContainer.querySelectorAll('img');
let currentPage = 1;
const pageSize = 10; // number of images to load per page

const loadMoreImages = () => {
  // load the next page of images
  const startIndex = (currentPage - 1) * pageSize;
  const endIndex = currentPage * pageSize;
  for (let i = startIndex; i < endIndex; i++) {
    if (i < images.length) {
      images[i].src = images[i].dataset.src;
    }
  }
  currentPage++;
};

const options = {
  rootMargin: '0px',
  threshold: 0.5 // load more images when at least 50% of the last image is visible
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      loadMoreImages();
    }
  });
}, options);

// observe the last image in the container
const lastImage = images[images.length - 1];
observer.observe(lastImage);