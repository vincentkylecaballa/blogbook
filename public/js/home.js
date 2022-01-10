 // core version + navigation, pagination modules:
 import Swiper, { Navigation, Pagination } from 'swiper';
 // import Swiper and modules styles
 import 'swiper/css';
 import 'swiper/css/navigation';
 import 'swiper/css/pagination';

 // configure Swiper to use modules
 Swiper.use([Navigation, Pagination]);

 // init Swiper:
 // const swiper = new Swiper(...);

 const blogSection = document.querySelector('.blog-section');

 db.collection("blogs").get().then((blogs) => {
     blogs.forEach(blog => {
         if (blog.id != decodeURI(location.pathname.split("/").pop())) {
             createBlog(blog);
         }
     })
 })

 const createBlog = (blog) => {
     let data = blog.data();
     blogSection.innerHTML += `
     <div class="col-lg-5">
         <img id="blog-image" src="${data.bannerImage}" alt="">
     </div>
     <div class="col-lg-7">
         <h2 class="blog-title">${data.title.substring(0, 100) + '...'}</h2>
         <p class="blog-overview">${data.article.substring(0, 200) + '...'}</p>
         <a href="/${blog.id}" class="btn btn-warning">Read More</a>
     </div>
    `;
 }