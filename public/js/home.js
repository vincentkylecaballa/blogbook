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

 let blogId = decodeURI(location.pathname.split("/").pop());

 let docRef = db.collection("blogs").doc(blogId);

 docRef.get().then((doc) => {
     if (doc.exists) {
         setupBlog(doc.data());
     } else {
         location.replace("/");
     }
 })

 const setupBlog = (data) => {
     const banner = document.querySelector('.banner');
     const blogTitle = document.querySelector('.title');
     const titleTag = document.querySelector('title');
     const publish = document.querySelector('.published');

     banner.style.backgroundImage = `url(${data.bannerImage})`;

     titleTag.innerHTML += blogTitle.innerHTML = data.title;
     publish.innerHTML += data.publishedAt;

     const article = document.querySelector('.article');
     addArticle(article, data.article);
 }