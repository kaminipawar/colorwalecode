  //  import Myheader from './components/Myheader.vue';
  // import Myfooter from './components/Myfooter.vue';
  import Home from './components/Home.vue';



  import RecentProjects from './components/RecentProjects.vue';
  import Reviews from './components/Reviews.vue';
  import survey from './components/survey/Survey.vue';

  import FAQ from './components/FAQ.vue';
  import Products from './components/Products.vue';
  import Services from './components/Services.vue';
  import More from './components/More.vue';
  import NotFound from './components/NotFound.vue';
  import Survey from './components/survey/Survey';
  import LivingRoom from './components/survey/LivingRoom.vue';
  import Bedroom1 from './components/survey/Bedroom1.vue';
  import Bedroom2 from './components/survey/Bedroom2.vue';

  import Washroom1 from './components/survey/Washroom1.vue';
  import Washroom2 from './components/survey/Washroom2.vue';
  import Diningroom from './components/survey/Diningroom.vue';
  import Kitchen from './components/survey/Kitchen.vue';
  import Texture from './components/Texture.vue';
    import Paints from './components/Paints.vue';
    import Waterproofing from './components/Waterproofing.vue';
    import Stencils from './components/Stencils.vue';
    import Interiorpainting from './components/Interiorpainting.vue';
    import Exteriorpainting from './components/Exteriorpainting.vue';








  
  /* all commaom path*/


  export default {
   mode: 'history',

   linkActiveClass: 'font-bold',

   routes: [
 
   
   {path: '/',component: Home},
   {path: '*',component: NotFound},

   {path: '/recentprojects',component: RecentProjects},
   {path: '/reviews',component: Reviews},
   {path: '/survey',component: survey},
   {path: '/Survey',component: Survey},
   {path: '/LivingRoom',component: LivingRoom},
   {path: '/Bedroom1',component: Bedroom1},
   {path: '/Washroom1',component: Washroom1},
   {path: '/Bedroom2',component: Bedroom2},
   {path: '/Washroom2',component: Washroom2},
   {path: '/Diningroom',component: Diningroom},
   {path: '/Kitchen',component: Kitchen},
   {path: '/Texture',component: Texture},
   {path: '/Paints',component: Paints},
   {path: '/Waterproofing',component: Waterproofing},
   {path: '/Stencils',component: Stencils},
   {path: '/Interiorpainting',component: Interiorpainting},
   {path: '/Exteriorpainting',component: Exteriorpainting},








   {path: '/faq',component: FAQ},
   {path: '/products',component: Products}, 
   {path: '/services',component: Services},
   {path: '/more',component: More},

     

   


  	  	// {path: '/myheader',component: Myheader},
      //   {path: '/myfooter',component: Myfooter},


      
      
      
      ]
    };

//{ path: '/', component: Home },

//{ path: '/about', component: About },


